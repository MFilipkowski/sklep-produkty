<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.shop.url.cms_provider' shared service.

return $this->services['prestashop.adapter.shop.url.cms_provider'] = new \PrestaShop\PrestaShop\Adapter\Shop\Url\CmsProvider(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->link);
