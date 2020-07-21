<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

/**
 * Participant in a payment activity, one of person or business must be provided.
 */
class Participant extends \Account
{
	/** @var Person */
	public $person;

	/** @var Business */
	public $business;
}
