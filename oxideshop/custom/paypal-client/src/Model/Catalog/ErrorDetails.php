<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Catalog;

class ErrorDetails
{
	/** @var string */
	public $field;

	/** @var string */
	public $value;

	/** @var string */
	public $location;

	/** @var string */
	public $issue;

	/** @var string */
	public $description;
}