<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * The outcome of the dispute case.
 *
 * generated from: referred-outcome.json
 */
class Outcome implements JsonSerializable
{
    use BaseModel;

    /** @var string */
    public $faulty_party;

    /** @var string */
    public $adjudication_reason;

    /**
     * @var string
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6).
     * Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular
     * expression provides guidance but does not reject all invalid dates.</blockquote>
     */
    public $resolution_date;
}
