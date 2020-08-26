<?php

/**
 * This file is part of OXID eSales Paypal module.
 *
 * OXID eSales Paypal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Paypal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Paypal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2020
 */

namespace OxidProfessionalServices\PayPal\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;
use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Registry;
use OxidProfessionalServices\PayPal\Api\Exception\ApiException;
use OxidProfessionalServices\PayPal\Api\Model\Orders\OrderCaptureRequest;
use OxidProfessionalServices\PayPal\Api\Model\Payments\RefundRequest;
use OxidProfessionalServices\PayPal\Api\Service\Payments;
use OxidProfessionalServices\PayPal\Core\ServiceFactory;

/**
 * Order class wrapper for PayPal module
 */
class PaypalOrderController extends AdminDetailsController
{
    /**
     * @var Order
     */
    protected $order;

    /**
     * @return string
     * @throws ApiException
     * @throws StandardException
     */
    public function render()
    {
        parent::render();

        try {
            $order = $this->getOrder();
            $this->addTplParam('oxid', $this->getEditObjectId());
            $this->addTplParam('order', $order);

            if ($order->paidWithPayPal()) {
                $this->addTplParam('payPalOrder', $order->getPayPalOrder());
                $this->addTplParam('capture', $order->getOrderPaymentCapture());
            } else {
                $this->addTplParam('payPalOrder', null);
            }
        } catch (ApiException $exception) {
            Registry::getLogger()->error($exception);
        } catch (StandardException $exception) {
            Registry::getLogger()->error($exception);
        }

        return "paypalorder.tpl";
    }

    /**
     * Capture payment action
     */
    public function capture(): void
    {
        try {
            $orderId = $this->getOrder()->getPayPalOrder()->id;

            /** @var ServiceFactory $serviceFactory */
            $serviceFactory = Registry::get(ServiceFactory::class);
            $service = $serviceFactory->getOrderService();
            $request = new OrderCaptureRequest();

            $service->capturePaymentForOrder('', $orderId, $request, '');
        } catch (ApiException $exception) {
            Registry::getLogger()->error($exception);
        } catch (StandardException $exception) {
            Registry::getLogger()->error($exception);
        }
    }

    /**
     * Refund payment action
     */
    public function refund(): void
    {
        try {
            $request = Registry::getRequest();
            $refundAmount = $request->getRequestEscapedParameter('refundAmount');
            $invoiceId = $request->getRequestEscapedParameter('invoiceId');
            $refundAll = $request->getRequestEscapedParameter('refundAll');
            $noteToPayer = $request->getRequestParameter('noteToPayer');

            $capture = $this->getOrder()->getOrderPaymentCapture();
            if (!$capture) {
                throw new StandardException('Order not captured');
            }

            $request = new RefundRequest();
            $request->note_to_payer = $noteToPayer;
            $request->invoice_id = !empty($invoiceId) ? $invoiceId : null;
            if (!$refundAll) {
                $request->initAmount();
                $request->amount->currency_code = $capture->amount->currency_code;
                $request->amount->value = $refundAmount;
            }

            /** @var Payments $paymentService */
            $paymentService = Registry::get(ServiceFactory::class)->getPaymentService();
            $paymentService->refundCapturedPayment($capture->id, $request, '');
        } catch (ApiException $exception) {
            Registry::getLogger()->error($exception);
        } catch (StandardException $exception) {
            Registry::getLogger()->error($exception);
        }
    }

    /**
     * Get active order
     *
     * @return Order
     * @throws StandardException
     */
    protected function getOrder(): Order
    {
        if (!$this->order) {
            $order = oxNew(Order::class);
            $orderId = $this->getEditObjectId();
            if ($orderId === null || !$order->load($orderId)) {
                throw new StandardException('Order not found');
            }
            $this->order = $order;
        }

        return $this->order;
    }
}
