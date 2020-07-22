<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Subscriptions;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * The name of the party.
 *
 * generated from: merchant.CommonComponentsSpecification-v1-schema-common_components-v3-schema-json-openapi-2.0-name.json
 */
class Name implements JsonSerializable
{
    use BaseModel;

    /** @var string */
    public $prefix;

    /** @var string */
    public $given_name;

    /** @var string */
    public $surname;

    /** @var string */
    public $middle_name;

    /** @var string */
    public $suffix;

    /** @var string */
    public $alternate_full_name;

    /** @var string */
    public $full_name;
}
