<div id="overlay"><div class="loader"></div></div>
[{if $subscriptionPlans}]
    [{if $oxcmp_user}]
        [{include file="pspaypalsubscriptionbuttons.tpl" buttonId=$buttonId aid=$aid}]
    [{else}]
        [{oxmultilang ident="OXPS_PAYPAL_SUBSCRIPTION_NEEDSUSER"}]
    [{/if}]
[{else}]
    [{include file="pspaypalpaymentbuttons.tpl" buttonId=$buttonId paymentStrategy=$paymentStrategy aid=$aid}]
[{/if}]
