<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * Pricing directive for transaction indication the source and type of pricing.
 */
class PricingDirective implements JsonSerializable
{
    use BaseModel;

    const PARTICIPANT_TYPE_SENDER = 'SENDER';
    const PARTICIPANT_TYPE_RECEIVER = 'RECEIVER';
    const PARTICIPANT_TYPE_FACILITATOR = 'FACILITATOR';
    const TYPE_BLENDED = 'BLENDED';
    const TYPE_IC_PLUS = 'IC_PLUS';

    /**
     * @var string
     * Participant type.
     */
    public $participant_type;

    /** @var string */
    public $account_number;

    /**
     * @var string
     * Type of pricing applied to a payment.
     */
    public $type;
}
