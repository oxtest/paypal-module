<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

/**
 * The authorization with additional payment details, such as risk assessment and processor response. These details are populated only for certain payment methods.
 */
class AuthorizationWithAdditionalData extends \Authorization
{
	/** @var RiskAssessments */
	public $risk_assessment;

	/** @var ProcessorResponse */
	public $processor_response;
}