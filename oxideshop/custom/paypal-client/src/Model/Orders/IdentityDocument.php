<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * The identity document.
 */
class IdentityDocument implements JsonSerializable
{
    use BaseModel;

    const TYPE_SOCIAL_SECURITY_NUMBER = 'SOCIAL_SECURITY_NUMBER';
    const TYPE_INDIVIDUAL_TAXPAYER_IDENTIFICATION_NUMBER = 'INDIVIDUAL_TAXPAYER_IDENTIFICATION_NUMBER';
    const TYPE_NATIONAL_IDENTIFICATION_NUMBER = 'NATIONAL_IDENTIFICATION_NUMBER';
    const TYPE_TAX_IDENTIFICATION_NUMBER = 'TAX_IDENTIFICATION_NUMBER';
    const TYPE_PASSPORT_NUMBER = 'PASSPORT_NUMBER';
    const TYPE_SSN4 = 'SSN4';

    /**
     * @var string
     * The identity document type.
     */
    public $type;

    /**
     * @var DocumentIssuer
     * The document-issuing authority information.
     */
    public $issuer;

    /** @var string */
    public $id_number;

    /**
     * @var string
     * The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). To
     * represent special legal values, such as a date of birth, you should use dates with no associated time or
     * time-zone data. Whenever possible, use the standard `date_time` type. This regular expression does not
     * validate all dates. For example, February 31 is valid and nothing is known about leap years.
     */
    public $issued_date;

    /**
     * @var string
     * The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). To
     * represent special legal values, such as a date of birth, you should use dates with no associated time or
     * time-zone data. Whenever possible, use the standard `date_time` type. This regular expression does not
     * validate all dates. For example, February 31 is valid and nothing is known about leap years.
     */
    public $expiration_date;
}
