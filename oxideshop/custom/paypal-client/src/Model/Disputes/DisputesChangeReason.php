<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * The change reason response.
 *
 * generated from: response-disputes_change_reason.json
 */
class DisputesChangeReason implements JsonSerializable
{
    use BaseModel;

    /** @var array<array> */
    public $links;
}
