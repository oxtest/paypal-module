[{if $order->isPayPalSubscription()}]
    [{include file='tpl/page/account/order_and_subscription_overview.tpl'}]
[{elseif $order->isPayPalPartSubscription()}]
    [{include file='tpl/page/account/order_and_partsubscription_overview.tpl'}]
[{else}]
    [{$smarty.block.parent}]
[{/if}]