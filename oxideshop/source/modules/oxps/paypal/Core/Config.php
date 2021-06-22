<?php

/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2020
 */

namespace OxidProfessionalServices\PayPal\Core;

use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Registry;

/**
 * Class Config
 */
class Config
{
    /**
     * Checks if module configurations are valid
     *
     * @throws StandardException
     */
    public function checkHealth(): void
    {
        if (
            (
                !$this->isSandbox() &&
                !$this->getLiveClientId() &&
                !$this->getLiveClientSecret() &&
                !$this->getLiveWebhookId()
            ) ||
            (
                $this->isSandbox() &&
                !$this->getSandboxClientId() &&
                !$this->getSandboxClientSecret() &&
                !$this->getSandboxWebhookId()
            )
        ) {
            throw oxNew(
                StandardException::class
            );
        }
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        try {
            $this->checkHealth();
        } catch (StandardException $exception) {
            return false;
        }

        return true;
    }

    /**
     * @return bool
     */
    public function isSandbox(): bool
    {
        return (bool) Registry::getConfig()->getConfigParam('blPayPalSandboxMode');
    }

    /**
     * Get client id based on set active mode
     *
     * @return string
     */
    public function getClientId(): string
    {
        return $this->isSandbox() ?
            $this->getSandboxClientId() :
            $this->getLiveClientId();
    }

    /**
     * Get client secret based on active mode
     *
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->isSandbox() ?
            $this->getSandboxClientSecret() :
            $this->getLiveClientSecret();
    }

    /**
     * @return string
     */
    public function getWebhookId()
    {
        return $this->isSandbox() ?
            $this->getSandboxWebhookId()
            : $this->getLiveWebhookId();
    }

    /**
     * @return string
     */
    public function getLiveClientId(): string
    {
        return (string) Registry::getConfig()->getConfigParam('sPayPalClientId', '');
    }

    /**
     * @return string
     */
    public function getLiveClientSecret(): string
    {
        return (string) Registry::getConfig()->getConfigParam('sPayPalClientSecret', '');
    }

    /**
     * @return string
     */
    public function getLiveWebhookId()
    {
        return (string) Registry::getConfig()->getConfigParam('sPayPalWebhookId', '');
    }

    /**
     * @return string
     */
    public function getSandboxClientId(): string
    {
        return (string) Registry::getConfig()->getConfigParam('sPayPalSandboxClientId', '');
    }

    /**
     * @return string
     */
    public function getSandboxClientSecret(): string
    {
        return (string) Registry::getConfig()->getConfigParam('sPayPalSandboxClientSecret', '');
    }

    /**
     * @return string
     */
    public function getSandboxWebhookId()
    {
        return (string) Registry::getConfig()->getConfigParam('sPayPalSandboxWebhookId', '');
    }

    /**
     * @return bool
     */
    public function showPayPalBasketButton(): bool
    {
        return (bool) Registry::getConfig()->getConfigParam('blPayPalShowBasketButton', false);
    }

    /**
     * @return bool
     */
    public function showPayPalCheckoutButton(): bool
    {
        return (bool) Registry::getConfig()->getConfigParam('blPayPalShowCheckoutButton', false);
    }

    /**
     * @return bool
     */
    public function showPayPalProductDetailsButton(): bool
    {
        return (bool) Registry::getConfig()->getConfigParam('blPayPalShowProductDetailsButton');
    }

    /**
     * @return bool
     */
    public function getAutoBillOutstanding(): bool
    {
        return (bool) Registry::getConfig()->getConfigParam('blPayPalAutoBillOutstanding');
    }

    /**
     * @return string
     */
    public function getSetupFeeFailureAction(): string
    {
        return (string) Registry::getConfig()->getConfigParam('sPayPalSetupFeeFailureAction', 'CONTINUE');
    }

    /**
     * @return string
     */
    public function getPaymentFailureThreshold(): string
    {
        return (string) Registry::getConfig()->getConfigParam('sPayPalPaymentFailureThreshold', '1');
    }
    /**
     * This ClientId is public. The only function is to create
     * a basiclly AccessToken,  Which one is needed to generate
     * the request for the merchant ClientId.
     * For this purpose, this ClientId is unencrypted, here as part
     * of this open Source Module
     * this method is private see getTechnicalClientId which respects the sandbox mode for you
     * @return string
     */
    public function getLiveOxidClientId(): string
    {
        return "AQPFC4NJr-nIiumTXvyfHFJLK-RlWAcv9D0zAc4OWiKiQXyXnJZ7Lw1E2h6O2mtceJf5kWflplieijnK";
    }

    /**
     * This ClientId is public. The only function is to create
     * a basiclly AccessToken,  Which one is needed to generate
     * the request for the merchant ClientId and Secret.
     * For this purpose, this ClientId is unencrypted, here as part
     * of this open Source Module
     *
     * @return string
     */
    public function getSandboxOxidClientId(): string
    {
        return "AS-lHBWs8cudxxonSeQ1eRbdn1Nr-7baqAURRNJnIuP-PPQFzFF1XkjDYV3NG3M6O75st2D98DOil4Vd";
    }

    /**
     * This PartnerId is public. The only function is to create
     * a basiclly AccessToken,  Which one is needed to generate
     * the request for the merchant ClientId and Secret.
     * For this purpose, this ClientId is unencrypted, here as part
     * of this open Source Module
     * this method is private see getTechnicalPartnerId which respects the sandbox mode for you
     * @return string
     */
    public function getLiveOxidPartnerId(): string
    {
        return "FULA6AY33UTA4";
    }

    /**
     * This PartnerId is public. The only function is to create
     * a basiclly AccessToken,  Which one is needed to generate
     * the request for the merchant ClientId and Secret.
     * For this purpose, this PartnerId is unencrypted, here as part
     * of this open Source Module
     *
     * @return string
     */
    public function getSandboxOxidPartnerId(): string
    {
        return "LRCHTG6NYPSXN";
    }

    /**
     * This Secret is public. The only function is to create
     * a basiclly AccessToken,  Which one is needed to generate
     * the request for the merchant ClientId and Secret.
     * For this purpose, this ClientId is unencrypted, here as part
     * of this open Source Module
     *
     * @return string
     */
    public function getLiveOxidSecret(): string
    {
        return "ELcHsbqzqmC8wVbndnDxokTnQboMn-HfcJ2tGfWbxJUIAIys0HMqfzbHrev5R--RPd6B2xNWJrddtO9z";
    }

    /**
     * This Secret is public. The only function is to create
     * a basiclly AccessToken,  Which one is needed to generate
     * the request for the merchant ClientId and Secret.
     * For this purpose, this PartnerId is unencrypted, here as part
     * of this open Source Module
     *
     * @return string
     */
    public function getSandboxOxidSecret(): string
    {
        return "EANkP__pSQ25b1cXuO4CrC_KeDc78rKtgUpeEDthejOVjkJV9sv0mfjxM_A4qXyMqbdCIeib0tDfQY_6";
    }

    /**
     * @return string
     */
    public function getTechnicalClientId()
    {
        return $this->isSandbox() ?
            $this->getSandboxOxidClientId()
            : $this->getLiveOxidClientId();
    }

    /**
     * @return string
     */
    public function getTechnicalPartnerId()
    {
        return $this->isSandbox() ?
            $this->getSandboxOxidPartnerId()
            : $this->getLiveOxidPartnerId();
    }

    /**
     * @return string
     */
    public function getTechnicalClientSecret()
    {
        return $this->isSandbox() ?
            $this->getSandboxOxidSecret()
            : $this->getLiveOxidSecret();
    }

    /**
     * Get webhook controller url
     *
     * @return string
     */
    public function getWebhookControllerUrl(): string
    {
        return html_entity_decode(
            Registry::getConfig()->getCurrentShopUrl(false) . 'index.php?cl=PayPalWebhookController'
        );
    }
}
