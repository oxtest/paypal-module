<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Orders;

/**
 * The request data or link target.
 */
class LinkSchema
{
	/** @var object */
	public $additionalItems;

	/** @var object */
	public $dependencies;

	/** @var object */
	public $items;

	/** @var object */
	public $definitions;

	/** @var object */
	public $patternProperties;

	/** @var object */
	public $properties;

	/** @var array */
	public $allOf;

	/** @var array */
	public $anyOf;

	/** @var array */
	public $oneOf;

	/** @var object */
	public $not;

	/** @var array */
	public $links;

	/** @var string */
	public $fragmentResolution;

	/** @var object */
	public $media;

	/** @var string */
	public $pathStart;
}