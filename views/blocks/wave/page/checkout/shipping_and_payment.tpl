[{assign var="payment" value=$oView->getPayment()}]
[{if "oscpaypal_acdc" == $payment->getId() || "oscpaypal_pui" == $payment->getId()}]
    [{include file="modules/osc/paypal/paypal_shipping_and_payment_wave.tpl"}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]