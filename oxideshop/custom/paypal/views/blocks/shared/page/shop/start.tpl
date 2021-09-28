[{if $oViewConf->isModuleActive('oxscpaypal') && $oViewConf->showPayPalBannerOnStartPage()}]
    [{assign var="paypalInstallmentPrice" value=$oxcmp_basket->getBruttoSum()}]
    [{if $oxcmp_basket->isPriceViewModeNetto()}]
        [{assign var="paypalInstallmentPrice" value=$oxcmp_basket->getNettoSum()}]
    [{/if}]

    [{oxstyle include=$oViewConf->getModuleUrl('oxscpaypal','out/src/css/paypal_installment.css')}]
    [{include file="tpl/installment_banners.tpl" amount=$paypalInstallmentPrice selector=$oViewConf->getPayPalBannerStartPageSelector()}]
[{/if}]
[{$smarty.block.parent}]
