<?php

/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2018
 */

namespace OxidProfessionalServices\PayPal\Model;

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Field;
use OxidEsales\Eshop\Core\Model\BaseModel;
use OxidEsales\Eshop\Core\Registry;
use OxidProfessionalServices\PayPal\Api\Exception\ApiException;
use OxidProfessionalServices\PayPal\Api\Model\Orders\Capture;
use OxidProfessionalServices\PayPal\Api\Model\Orders\Order as PayPalOrder;
use OxidProfessionalServices\PayPal\Api\Model\Catalog\Product as PayPalProduct;
use OxidProfessionalServices\PayPal\Api\Model\Subscriptions\Subscription as PayPalSubscription;
use OxidProfessionalServices\PayPal\Api\Service\Orders;
use OxidProfessionalServices\PayPal\Core\ServiceFactory;
use OxidProfessionalServices\PayPal\Model\Subscription;

/**
 * PayPal oxOrder class
 *
 * @mixin \OxidEsales\Eshop\Application\Model\Order
 */
class Order extends Order_parent
{
    /**
     * PayPal order information
     *
     * @var PayPalOrder
     */
    protected $payPalOrder;

    /**
     * PayPal order Id
     *
     * @var string
     */
    protected $payPalOrderId;

    /**
     * PayPal subscription Id
     *
     * @var string
     */
    protected $payPalSubscriptionId;

    /**
     * PayPal Session Id
     *
     * @var string
     */
    protected $payPalSessionId;

    /**
     * PayPal Product Id
     *
     * @var string
     */
    protected $payPalProductId;

    /**
     * Get PayPal order object for the current active order object
     * Result is cached and returned on subsequent calls
     *
     * @return PayPalOrder
     * @throws ApiException
     */
    public function getPayPalOrder(): PayPalOrder
    {
        if (!$this->payPalOrder) {
            /** @var Orders $orderService */
            $orderService = Registry::get(ServiceFactory::class)->getOrderService();
            $this->payPalOrder = $orderService->showOrderDetails($this->getPayPalOrderIdForOxOrderId());
        }

        return $this->payPalOrder;
    }

    /**
     * Update order oxpaid to current time.
     */
    public function markOrderPaid()
    {
        parent::_setOrderStatus('OK');

        $db = DatabaseProvider::getDb();
        $utilsDate = Registry::getUtilsDate();
        $date = date('Y-m-d H:i:s', $utilsDate->getTime());

        $query = 'update oxorder set oxpaid=? where oxid=?';
        $db->execute($query, [$date, $this->getId()]);

        //updating order object
        $this->oxorder__oxpaid = new Field($date);
    }

    /**
     * Returns PayPal order id.
     *
     * @param string|null $oxId
     *
     * @return string
     */
    public function getPayPalOrderIdForOxOrderId(string $oxId = null)
    {
        if (is_null($this->payPalOrderId)) {
            $this->payPalOrderId = '';
            $oxId = is_null($oxId) ? $this->getId() : $oxId;
            $table = 'oxps_paypal_order';
            $shopId = $this->getShopId();
            $params = [$table . '.oxps_paypal_oxorderid' => $oxId, $table . '.oxps_paypal_oxshopid' => $shopId];

            $paypalOrderObj = oxNew(BaseModel::class);
            $paypalOrderObj->init($table);
            $select = $paypalOrderObj->buildSelectString($params);

            if ($data = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getRow($select)) {
                $this->payPalOrderId = $data['oxps_paypal_paypalorderid'];
            }
        }
        return $this->payPalOrderId;
    }

    /**
     * Returns PayPal Session id.
     *
     * @param string|null $oxId
     *
     * @return string
     */
    public function getPayPalSessionIdForOxOrderId(string $oxId = null)
    {
        if (is_null($this->payPalSessionId)) {
            $this->payPalSessionId = '';
            $oxId = is_null($oxId) ? $this->getId() : $oxId;
            $table = 'oxps_paypal_subscription_product_order';
            $shopId = $this->getShopId();
            $params = [$table . '.oxps_paypal_order_id' => $oxId, $table . '.oxps_paypal_shop_id' => $shopId];

            $paypalOrderObj = oxNew(BaseModel::class);
            $paypalOrderObj->init($table);
            $select = $paypalOrderObj->buildSelectString($params);

            if ($data = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getRow($select)) {
                $this->payPalSessionId = $data['oxps_paypal_session_id'];
            }
        }
        return $this->payPalSessionId;
    }

    /**
     * Returns PayPal Session id.
     *
     * @param string|null $oxId
     *
     * @return string
     */
    public function getPayPalProductIdForOxOrderId(string $oxId = null)
    {
        if (is_null($this->payPalProductId)) {
            $this->payPalProductId = '';
            $oxId = is_null($oxId) ? $this->getId() : $oxId;
            $table = 'oxps_paypal_subscription_product_order';
            $shopId = $this->getShopId();
            $params = [$table . '.oxps_paypal_order_id' => $oxId, $table . '.oxps_paypal_shop_id' => $shopId];

            $paypalOrderObj = oxNew(BaseModel::class);
            $paypalOrderObj->init($table);
            $select = $paypalOrderObj->buildSelectString($params);

            if ($data = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getRow($select)) {
                $this->payPalProductId = $data['oxps_paypal_session_id'];
            }
        }
        return $this->payPalProductId;
    }

    /**
     * Returns PayPal Subscription id.
     *
     * @param string|null $sessionId
     *
     * @return string
     */
    public function getPayPalSubscriptionIdForOxOrderId(string $sessionId = null)
    {
        if (is_null($this->payPalSubscriptionId)) {
            $this->payPalSubscriptionId = '';

            $sessionId = is_null($sessionId) ? $this->getPayPalSessionIdForOxOrderId($this->getId()) : $sessionId;

            $table = 'oxps_paypal_subscription';
            $params = [$table . '.oxpspaypalid' => $sessionId];

            $paypalOrderObj = oxNew(BaseModel::class);
            $paypalOrderObj->init($table);
            $select = $paypalOrderObj->buildSelectString($params);

            if ($data = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getRow($select)) {
                $this->payPalSubscriptionId = $data['oxid'];
            }
        }
        return $this->payPalSubscriptionId;
    }

    /**
     * Checks if the order was paid using PayPal
     *
     * @return bool
     */
    public function paidWithPayPal(): bool
    {
        return (bool) ($this->getPayPalOrderIdForOxOrderId() || $this->getPayPalSubscriptionIdForOxOrderId());
    }

    /**
     * Get order payment capture or null if not captured
     *
     * @return Capture|null
     * @throws ApiException
     */
    public function getOrderPaymentCapture(): ?Capture
    {
        return $this->getPayPalOrder()->purchase_units[0]->payments->captures[0] ?? null;
    }
}
