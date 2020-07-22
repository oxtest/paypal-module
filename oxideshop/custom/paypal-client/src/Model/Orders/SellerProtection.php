<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * The level of protection offered as defined by [PayPal Seller Protection for
 * Merchants](https://www.paypal.com/us/webapps/mpp/security/seller-protection).
 *
 * generated from: MerchantsCommonComponentsSpecification-v1-schema-seller_protection.json
 */
class SellerProtection implements JsonSerializable
{
    use BaseModel;

    /** @var string */
    public $status;

    /** @var array */
    public $dispute_categories;
}
