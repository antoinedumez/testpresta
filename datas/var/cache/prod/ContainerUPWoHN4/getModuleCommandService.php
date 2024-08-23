<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Command\ModuleCommand' shared service.

return $this->services['PrestaShopBundle\\Command\\ModuleCommand'] = new \PrestaShopBundle\Command\ModuleCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()), ($this->services['prestashop.adapter.module.self_configurator'] ?? $this->load('getPrestashop_Adapter_Module_SelfConfiguratorService.php')), ($this->services['prestashop.module.manager'] ?? $this->load('getPrestashop_Module_ManagerService.php')));
