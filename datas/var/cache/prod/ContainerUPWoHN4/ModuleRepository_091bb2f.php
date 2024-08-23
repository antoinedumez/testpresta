<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderce866 = null;
    private $initializer85b55 = null;
    private static $publicProperties2e4c9 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getList', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getInstalledModules', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getMustBeConfiguredModules', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getUpgradableModules', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'setActionUrls', array('collection' => $collection), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer85b55 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderce866) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderce866 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderce866->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, '__get', ['name' => $name], $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        if (isset(self::$publicProperties2e4c9[$name])) {
            return $this->valueHolderce866->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderce866;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderce866;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderce866;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderce866;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, '__isset', array('name' => $name), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderce866;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderce866;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, '__unset', array('name' => $name), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderce866;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderce866;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, '__clone', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        $this->valueHolderce866 = clone $this->valueHolderce866;
    }
    public function __sleep()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, '__sleep', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return array('valueHolderce866');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer85b55 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer85b55;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'initializeProxy', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderce866;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderce866;
    }
}
