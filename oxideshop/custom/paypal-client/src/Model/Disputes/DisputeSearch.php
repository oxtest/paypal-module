<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Disputes;

/**
 * An array of disputes. Includes links that enable you to navigate through the response.
 */
class DisputeSearch
{
	/** @var array */
	public $items;

	/** @var integer */
	public $total_items;

	/** @var integer */
	public $total_pages;

	/** @var array */
	public $links;
}