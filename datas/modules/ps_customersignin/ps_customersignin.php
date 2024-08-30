<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ps_CustomerSignIn extends Module implements WidgetInterface
{
    /**
     * @var string Name of the module running on PS 1.6.x. Used for data migration.
     */
    const PS_16_EQUIVALENT_MODULE = 'blockuserinfo';

    private $templateFile;

    public function __construct()
    {
        $this->name = 'ps_customersignin';
        $this->tab = 'front_office_features';
        $this->author = 'PrestaShop';
        $this->version = '2.0.5';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->getTranslator()->trans('Customer "Sign in" link', [], 'Modules.Customersignin.Admin');
        $this->description = $this->getTranslator()->trans('Make your customers feel at home on your store, invite them to sign in!', [], 'Modules.Customersignin.Admin');
        $this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];

        $this->templateFile = 'module:ps_customersignin/ps_customersignin.tpl';
    }

    public function install()
    {
        // Migrate data from 1.6 equivalent module (if applicable), then uninstall
        if (Module::isInstalled(self::PS_16_EQUIVALENT_MODULE)) {
            $oldModule = Module::getInstanceByName(self::PS_16_EQUIVALENT_MODULE);
            if ($oldModule) {
                $oldModule->uninstall();
            }
        }

        return parent::install()
            && $this->registerHook('displayNav2');
    }

//    public function getWidgetVariables($hookName, array $configuration)
//    {
//        $logged = $this->context->customer->isLogged();
//
//        if ($logged) {
//            $customerName = $this->getTranslator()->trans(
//                '%firstname% %lastname%',
//                [
//                    '%firstname%' => $this->context->customer->firstname,
//                    '%lastname%' => $this->context->customer->lastname,
//                ],
//                'Modules.Customersignin.Admin'
//            );
//        } else {
//            $customerName = '';
//        }
//
//        $link = $this->context->link;
//
//        $totalAmount = $this->context->customer->getStats()['total_orders'];
//
//        // todo create an xp bar like a video game with $totalAmount
//
//        return [
//            /*
//            * @deprecated
//            */
//            'logged' => $logged,
//            'customerName' => $customerName,
//            /*
//            * @deprecated
//            */
//            'logout_url' => $link->getPageLink('index', true, null, 'mylogout'),
//            /*
//            * @deprecated
//            */
//            'my_account_url' => $link->getPageLink('my-account', true),
//        ];
//    }

    public function getWidgetVariables($hookName, array $configuration)
    {
        $logged = $this->context->customer->isLogged();

        if ($logged) {
            $customerName = $this->getTranslator()->trans(
                '%firstname% %lastname%',
                [
                    '%firstname%' => $this->context->customer->firstname,
                    '%lastname%' => $this->context->customer->lastname,
                ],
                'Modules.Customersignin.Admin'
            );
        } else {
            $customerName = '';
        }

        $link = $this->context->link;

        // Calcul du nombre total de commandes
        $totalAmount = $this->context->customer->getStats()['total_orders'];

        // Définir les niveaux d'XP
        $xpLevels = [10, 30, 60, 100, 150]; // Seuils pour chaque niveau

        // Calculer le niveau actuel
        $currentLevel = 0;
        foreach ($xpLevels as $level => $threshold) {
            if ($totalAmount < $threshold) {
                break;
            }
            $currentLevel = $level + 1;
        }

        // Calculer l'XP actuelle par rapport au niveau suivant
        $currentXP = $totalAmount - ($currentLevel > 0 ? $xpLevels[$currentLevel - 1] : 0);
        $nextLevelXP = isset($xpLevels[$currentLevel]) ? $xpLevels[$currentLevel] - ($currentLevel > 0 ? $xpLevels[$currentLevel - 1] : 0) : $currentXP;

        $xpProgress = min(100, ($currentXP / $nextLevelXP) * 100);
//dump($currentXP, $nextLevelXP, $xpProgress);

// todo trouver le front de ça !

        return [
            'logged' => $logged,
            'customerName' => $customerName,
            'logout_url' => $link->getPageLink('index', true, null, 'mylogout'),
            'my_account_url' => $link->getPageLink('my-account', true),
            'currentLevel' => $currentLevel,
            'xpProgress' => $xpProgress,
            'currentXP' => $currentXP,
            'nextLevelXP' => $nextLevelXP,
        ];
    }


    public function renderWidget($hookName, array $configuration)
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));

        return $this->fetch($this->templateFile);
    }
}
