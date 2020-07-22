<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * A merchant request to escalate a dispute, by ID, to a PayPal claim.
 *
 * generated from: request-escalate.json
 */
class Escalate implements JsonSerializable
{
    use BaseModel;

    /** @var string */
    public $note;

    /** @var string */
    public $buyer_escalation_reason;

    /**
     * @var Money
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public $buyer_requested_amount;
}
