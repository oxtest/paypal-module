<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * Payment details for an order.
 *
 * generated from: model-payment_details_request.json
 */
class PaymentDetailsRequest implements JsonSerializable
{
    use BaseModel;

    /**
     * @var PaymentSource
     * The payment source definition.
     */
    public $payment_source;

    /** @var array<UpdatePurchaseUnitRequest> */
    public $purchase_units;
}
