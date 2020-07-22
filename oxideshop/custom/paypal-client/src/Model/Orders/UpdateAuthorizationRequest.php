<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

use JsonSerializable;
use OxidProfessionalServices\PayPal\Api\Model\BaseModel;

/**
 * The authorized payment transaction.
 *
 * generated from: model-update_authorization_request.json
 */
class UpdateAuthorizationRequest implements JsonSerializable
{
    use BaseModel;

    /** @var string */
    public $id;

    /** @var string */
    public $status;

    /**
     * @var AuthorizationStatusDetails
     * The details of the authorized payment status.
     */
    public $status_details;
}
