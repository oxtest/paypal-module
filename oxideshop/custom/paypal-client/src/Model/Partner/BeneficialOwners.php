<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Partner;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * Beneficial owners of the entity.
 *
 * generated from: customer_common_overrides-beneficial_owners.json
 */
class BeneficialOwners implements JsonSerializable
{
    use BaseModel;

    /**
     * @var array<IndividualBeneficialOwner>
     * Individual beneficial owners.
     */
    public $individual_beneficial_owners;

    /**
     * @var array<BusinessBeneficialOwner>
     * Business beneficial owners.
     */
    public $business_beneficial_owners;
}
