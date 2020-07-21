<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

/**
 * The risk assessment for a customer or merchant account or transaction.
 */
class RiskAssessment
{
	/** @var integer */
	public $score;

	/** @var array */
	public $reasons;
}