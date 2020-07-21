<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Subscriptions;

/**
 * The request to update the quantity of the product or service in a subscription. You can also use this method to switch the plan and update the `shipping_amount` and `shipping_address` values for the subscription. This type of update requires the buyer's consent.
 */
class SubscriptionReviseRequest
{
	/** @var string */
	public $plan_id;

	/** @var string */
	public $quantity;

	/** @var string */
	public $effective_time;

	/** @var Money */
	public $shipping_amount;

	/** @var ShippingDetail */
	public $shipping_address;

	/** @var CustomizedXUnsupportedNineEightNineFourApplicationContext */
	public $application_context;
}