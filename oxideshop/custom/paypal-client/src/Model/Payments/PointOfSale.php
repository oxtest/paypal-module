<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Payments;

/**
 * The API caller-provided information about the store.
 */
class PointOfSale
{
	/** @var string */
	public $store_id;

	/** @var string */
	public $terminal_id;
}