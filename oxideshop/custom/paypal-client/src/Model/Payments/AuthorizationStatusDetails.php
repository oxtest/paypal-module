<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Payments;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * The details of the authorized payment status.
 *
 * generated from: MerchantCommonComponentsSpecification-v1-schema-authorization_status_details.json
 */
class AuthorizationStatusDetails implements JsonSerializable
{
    use BaseModel;

    /** Authorization is pending manual review. */
    const REASON_PENDING_REVIEW = 'PENDING_REVIEW';

    /**
     * @var string
     * The reason why the authorized status is `PENDING`.
     *
     * use one of constants defined in this class to set the value:
     * @see REASON_PENDING_REVIEW
     */
    public $reason;
}
