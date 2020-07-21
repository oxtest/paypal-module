<?php

namespace OxidProfessionalServices\PayPal\Api\Model\Payments;

/**
 * A resource that identies that a paypal wallet is used for payment.
 */
class PaypalWallet
{
	/** @var string */
	public $payment_method_preference;

	/** @var PaypalWalletAttributes */
	public $attributes;
}