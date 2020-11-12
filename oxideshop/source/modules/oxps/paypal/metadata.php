<?php

/**
 * This file is part of OXID eSales Paypal module.
 *
 * OXID eSales Paypal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Paypal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Paypal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2020
 */

use OxidEsales\Eshop\Application\Component\Widget\ArticleDetails;
use OxidEsales\Eshop\Application\Controller\Admin\ArticleList;
use OxidEsales\Eshop\Application\Controller\ArticleDetailsController;
use OxidEsales\Eshop\Application\Controller\BasketController;
use OxidEsales\Eshop\Application\Controller\OrderController;
use OxidEsales\Eshop\Application\Model\Article;
use OxidEsales\Eshop\Application\Model\Basket;
use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Application\Model\Selection as SelectionCore;
use OxidEsales\Eshop\Application\Model\VariantHandler as VariantHandlerCore;
use OxidEsales\Eshop\Application\Model\VariantSelectList as VariantSelectListCore;
use OxidEsales\Eshop\Core\ViewConfig;
use OxidEsales\Eshop\Application\Model\PaymentGateway;
use OxidProfessionalServices\PayPal\Controller\Admin\DisputeController;
use OxidProfessionalServices\PayPal\Controller\Admin\DisputeDetailsController;
use OxidProfessionalServices\PayPal\Component\Widget\ArticleDetails as ArticleDetailsComponent;
use OxidProfessionalServices\PayPal\Controller\Admin\OnboardingController;
use OxidProfessionalServices\PayPal\Controller\Admin\PaypalConfigController;
use OxidProfessionalServices\PayPal\Controller\Admin\PaypalOrderController;
use OxidProfessionalServices\PayPal\Controller\Admin\PaypalSubscribeController;
use OxidProfessionalServices\PayPal\Controller\Admin\SubscriptionController;
use OxidProfessionalServices\PayPal\Controller\Admin\SubscriptionDetailsController;
use OxidProfessionalServices\PayPal\Controller\Admin\SubscriptionTransactionController;
use OxidProfessionalServices\PayPal\Controller\Admin\TransactionController;
use OxidProfessionalServices\PayPal\Controller\Admin\ArticleListController;
use OxidProfessionalServices\PayPal\Controller\ArticleDetailsController as PayPalArticleDetailsController;
use OxidProfessionalServices\PayPal\Controller\BasketController as PayPalBasketController;
use OxidProfessionalServices\PayPal\Controller\ProxyController;
use OxidProfessionalServices\PayPal\Controller\WebhookController;
use OxidProfessionalServices\PayPal\Controller\Admin\BalanceController;
use OxidProfessionalServices\PayPal\Core\ViewConfig as PaypalViewConfig;
use OxidProfessionalServices\PayPal\Model\Basket as PaypalBasket;
use OxidProfessionalServices\PayPal\Model\Order as PaypalOrder;
use OxidProfessionalServices\PayPal\Model\PaymentGateway as PaypalPaymentGateway;
use OxidProfessionalServices\PayPal\Model\PayPalArticle;
use OxidProfessionalServices\PayPal\Model\Selection as PaypalSelectionModel;
use OxidProfessionalServices\PayPal\Model\VariantHandler as PaypalVariantHandler;
use OxidProfessionalServices\PayPal\Model\VariantSelectList as PayPalVariantSelectList;

$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'oxps/paypal',
    'title' => [
        'de' => 'OXPS :: PayPal - Online-Bezahldienst',
        'en' => 'OXPS :: PayPal - Online-Payment'
    ],
    'description' => [
        'de' => 'Nutzung des Online-Bezahldienstes von PayPal',
        'en' => 'Use of the online payment service from PayPal'
    ],
    'thumbnail' => 'out/img/paypal.png',
    'version' => '0.0.1',
    'author' => 'Oxid Professional Services',
    'url' => '',
    'email' => '',
    'extend' => [
        ViewConfig::class => PaypalViewConfig::class,
        Order::class => PaypalOrder::class,
        Basket::class => PaypalBasket::class,
        Article::class => PayPalArticle::class,
        PaymentGateway::class => PaypalPaymentGateway::class,
        ArticleList::class => ArticleListController::class,
        ArticleDetailsController::class => PayPalArticleDetailsController::class,
        BasketController::class => PayPalBasketController::class,
        ArticleDetails::class => ArticleDetailsComponent::class,
        SelectionCore::class => PaypalSelectionModel::class,
        VariantHandlerCore::class => PaypalVariantHandler::class,
        VariantSelectListCore::class => PayPalVariantSelectList::class,
        OrderController::class => \OxidProfessionalServices\PayPal\Controller\OrderController::class
    ],
    'controllers' => [
        'PaypalConfigController' => PaypalConfigController::class,
        'PayPalBalanceController' => BalanceController::class,
        'PayPalWebhookController' => WebhookController::class,
        'PayPalProxyController' => ProxyController::class,
        'PayPalTransactionController' => TransactionController::class,
        'PayPalSubscriptionTransactionController' => SubscriptionTransactionController::class,
        'PaypalSubscribeController' => PaypalSubscribeController::class,
        'OnboardingController' => OnboardingController::class,
        'PaypalOrderController' => PaypalOrderController::class,
        'PaypalSubscriptionDetailsController' => SubscriptionDetailsController::class,
        'PaypalSubscriptionController' => SubscriptionController::class,
        'PaypalAdminArticleListController' => ArticleListController::class,
        'PaypalDisputeController' => DisputeController::class,
        'PaypalDisputeDetailsController' => DisputeDetailsController::class
    ],
    'templates' => [
        'paypalconfig.tpl' => 'oxps/paypal/views/admin/tpl/paypalconfig.tpl',
        'paypalbillingplanstemplate.tpl' => 'oxps/paypal/views/admin/tpl/paypalbillingplanstemplate.tpl',
        'paypal_dispute_details.tpl' => 'oxps/paypal/views/admin/tpl/dispute_details.tpl',
        'paypal_disputes.tpl' => 'oxps/paypal/views/admin/tpl/disputes.tpl',
        'paypalorder.tpl' => 'oxps/paypal/views/admin/tpl/paypalorder.tpl',
        'billing_plan.tpl' => 'oxps/paypal/views/admin/tpl/inc/billing_plan.tpl',
        'subscription_form.tpl' => 'oxps/paypal/views/admin/tpl/inc/subscription_form.tpl',
        'billing_plan_data.tpl' => 'oxps/paypal/views/admin/tpl/inc/billing_plan_data.tpl',
        'paypal_list_pagination.tpl' => 'oxps/paypal/views/admin/tpl/inc/list_pagination.tpl',
        'paypal_subscriptions.tpl' => 'oxps/paypal/views/admin/tpl/subscriptions.tpl',
        'paypal_transactions.tpl' => 'oxps/paypal/views/admin/tpl/transactions.tpl',
        'paypal_balances.tpl' => 'oxps/paypal/views/admin/tpl/balances.tpl',
        'paypal_subscription_transactions.tpl' => 'oxps/paypal/views/admin/tpl/subscription_transactions.tpl',
        'paypal_subscription_details.tpl' => 'oxps/paypal/views/admin/tpl/subscription_details.tpl',
        'subscribe.tpl'    => 'oxps/paypal/views/admin/tpl/subscribe.tpl',
        'paypal_smart_payment_buttons.tpl' => 'oxps/paypal/views/includes/smart_payment_buttons.tpl',
        'flow/paypal_payment_option.tpl' => 'oxps/paypal/views/theme/flow/paypal_payment_option.tpl',
        'wave/paypal_payment_option.tpl' => 'oxps/paypal/views/theme/wave/paypal_payment_option.tpl'
    ],
    'events' => [
        'onActivate' => '\OxidProfessionalServices\PayPal\Core\Events::onActivate',
        'onDeactivate' => '\OxidProfessionalServices\PayPal\Core\Events::onDeactivate'
    ],
    'blocks' => [
        [
            'template' => 'article_list.tpl',
            'block' => 'admin_article_list_item',
            'file' => 'views/admin/tpl/article_list_extended.tpl'
        ],
        [
            'template' => 'article_list.tpl',
            'block' => 'admin_article_list_colgroup',
            'file' => 'views/admin/tpl/article_list_colgroup_extended.tpl'
        ],
        [
            'template' => 'article_list.tpl',
            'block' => 'admin_article_list_sorting',
            'file' => 'views/admin/tpl/article_list_sorting_extended.tpl'
        ],
        [
            'template' => 'headitem.tpl',
            'block' => 'admin_headitem_inccss',
            'file' => 'views/blocks/admin/admin_headitem_inccss.tpl'
        ],
        [
            'theme' => 'flow',
            'template' => 'layout/base.tpl',
            'block' => 'base_js',
            'file' => 'views/blocks/shared/layout/base_js.tpl'
        ],
        [
            'theme' => 'wave',
            'template' => 'layout/base.tpl',
            'block' => 'base_js',
            'file' => 'views/blocks/shared/layout/base_js.tpl'
        ],
        [
            'theme' => 'flow',
            'template' => 'layout/base.tpl',
            'block' => 'base_style',
            'file' => 'views/blocks/shared/layout/base_style.tpl'
        ],
        [
            'theme' => 'wave',
            'template' => 'layout/base.tpl',
            'block' => 'base_style',
            'file' => 'views/blocks/shared/layout/base_style.tpl'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/checkout/inc/basketcontents_list.tpl',
            'block' => 'checkout_basketcontents_basketitem_unitprice',
            'file' => '/views/blocks/shared/page/checkout/checkout_basketcontents_basketitem_unitprice.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'page/checkout/inc/basketcontents_list.tpl',
            'block' => 'checkout_basketcontents_basketitem_unitprice',
            'file' => '/views/blocks/shared/page/checkout/checkout_basketcontents_basketitem_unitprice.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'page/checkout/basket.tpl',
            'block' => 'basket_btn_next_bottom',
            'file' => '/views/blocks/shared/page/checkout/basket_btn_next_bottom.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/checkout/basket.tpl',
            'block' => 'basket_btn_next_bottom',
            'file' => '/views/blocks/shared/page/checkout/basket_btn_next_bottom.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'page/checkout/order.tpl',
            'block' => 'checkout_order_address',
            'file' => '/views/blocks/flow/page/checkout/checkout_order_address.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/checkout/order.tpl',
            'block' => 'checkout_order_address',
            'file' => '/views/blocks/wave/page/checkout/checkout_order_address.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'page/checkout/payment.tpl',
            'block' => 'select_payment',
            'file' => '/views/blocks/shared/page/checkout/select_payment.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/checkout/payment.tpl',
            'block' => 'select_payment',
            'file' => '/views/blocks/shared/page/checkout/select_payment.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'page/checkout/payment.tpl',
            'block' => 'change_payment',
            'file' => '/views/blocks/flow/page/checkout/change_payment.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/checkout/payment.tpl',
            'block' => 'change_payment',
            'file' => '/views/blocks/wave/page/checkout/change_payment.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'page/checkout/user.tpl',
            'block' => 'checkout_user_main',
            'file' => '/views/blocks/flow/page/checkout/checkout_user_main.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/checkout/user.tpl',
            'block' => 'checkout_user_main',
            'file' => '/views/blocks/wave/page/checkout/checkout_user_main.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'form/user_checkout_change.tpl',
            'block' => 'user_checkout_shipping_form',
            'file' => '/views/blocks/flow/form/checkout_shipping_form.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'form/user_checkout_change.tpl',
            'block' => 'user_checkout_shipping_form',
            'file' => '/views/blocks/wave/form/checkout_shipping_form.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'form/user_checkout_change.tpl',
            'block' => 'user_checkout_shipping_change',
            'file' => '/views/blocks/flow/form/checkout_shipping_change.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'form/user_checkout_change.tpl',
            'block' => 'user_checkout_shipping_change',
            'file' => '/views/blocks/wave/form/checkout_shipping_change.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'form/user_checkout_change.tpl',
            'block' => 'user_checkout_shipping_head',
            'file' => '/views/blocks/flow/form/user_checkout_shipping_head.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'form/user_checkout_change.tpl',
            'block' => 'user_checkout_shipping_head',
            'file' => '/views/blocks/wave/form/user_checkout_shipping_head.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'form/user_checkout_change.tpl',
            'block' => 'user_checkout_billing_feedback',
            'file' => '/views/blocks/flow/form/checkout_billing_feedback.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'form/user_checkout_change.tpl',
            'block' => 'user_checkout_billing_feedback',
            'file' => '/views/blocks/wave/form/checkout_billing_feedback.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_tobasket',
            'file' => '/views/blocks/shared/page/details/inc/details_productmain_tobasket.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_tobasket',
            'file' => '/views/blocks/shared/page/details/inc/details_productmain_tobasket.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_price',
            'file' => '/views/blocks/shared/page/details/inc/details_productmain_price.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_price',
            'file' => '/views/blocks/shared/page/details/inc/details_productmain_price.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'flow',
            'template' => 'widget/minibasket/minibasket.tpl',
            'block' => 'dd_layout_page_header_icon_menu_minibasket_functions',
            'file' =>
                '/views/blocks/flow/widget/minibasket/dd_layout_page_header_icon_menu_minibasket_functions.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'widget/minibasket/minibasket.tpl',
            'block' => 'dd_layout_page_header_icon_menu_minibasket_functions',
            'file' =>
                '/views/blocks/wave/widget/minibasket/dd_layout_page_header_icon_menu_minibasket_functions.tpl',
            'position' => '5'
        ],
        [
            'theme' => 'wave',
            'template' => 'page/checkout/inc/basketcontents_list.tpl',
            'block' => 'dd_layout_page_header_icon_menu_minibasket_functions',
            'file' =>
                '/views/blocks/wave/widget/minibasket/dd_layout_page_header_icon_menu_minibasket_functions.tpl',
            'position' => '5'
        ],
        [
            'template' => 'headitem.tpl',
            'block' => 'admin_headitem_incjs',
            'file' => 'views/blocks/admin/admin_headitem_incjs.tpl'
        ]
    ],
    'settings' => [
        ['name' => 'blPayPalSandboxMode', 'type' => 'bool', 'value' => 'false', 'group' => null],
        ['name' => 'sPayPalClientId', 'type' => 'str', 'value' => '', 'group' => null],
        ['name' => 'sPayPalClientSecret', 'type' => 'str', 'value' => '', 'group' => null],
        ['name' => 'sPayPalSandboxClientId', 'type' => 'str', 'value' => '', 'group' => null],
        ['name' => 'sPayPalWebhookId', 'type' => 'str', 'value' => '', 'group' => null],
        ['name' => 'sPayPalSandboxClientSecret', 'type' => 'str', 'value' => '', 'group' => null],
        ['name' => 'blPayPalShowProductDetailsButton', 'type' => 'bool', 'value' => true, 'group' => null],
        ['name' => 'blPayPalShowMiniBasketButton', 'type' => 'bool', 'value' => true, 'group' => null],
        ['name' => 'blPayPalShowAddToBasketModalButton', 'type' => 'bool', 'value' => true, 'group' => null],
    ]
];
