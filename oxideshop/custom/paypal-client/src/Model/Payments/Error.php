<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Payments;

class Error
{
	/** @var string */
	public $name;

	/** @var string */
	public $message;

	/** @var string */
	public $debug_id;

	/** @var string */
	public $information_link;

	/** @var array */
	public $details;

	/** @var array */
	public $links;
}