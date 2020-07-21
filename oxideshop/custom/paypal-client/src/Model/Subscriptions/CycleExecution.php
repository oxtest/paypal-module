<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Subscriptions;

/**
 * The regular and trial execution details for a billing cycle.
 */
class CycleExecution
{
	/** @var string */
	public $tenure_type;

	/** @var integer */
	public $sequence;

	/** @var integer */
	public $cycles_completed;

	/** @var integer */
	public $cycles_remaining;

	/** @var integer */
	public $current_pricing_scheme_version;

	/** @var Money */
	public $amount_payable_per_cycle;

	/** @var integer */
	public $total_cycles;
}