<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderce866 = null;
    private $initializer85b55 = null;
    private static $publicProperties2e4c9 = [
        
    ];
    public function getConnection()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getConnection', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getMetadataFactory', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getExpressionBuilder', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'beginTransaction', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getCache', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getCache();
    }
    public function transactional($func)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'transactional', array('func' => $func), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'wrapInTransaction', array('func' => $func), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'commit', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->commit();
    }
    public function rollback()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'rollback', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getClassMetadata', array('className' => $className), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'createQuery', array('dql' => $dql), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'createNamedQuery', array('name' => $name), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'createQueryBuilder', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'flush', array('entity' => $entity), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'clear', array('entityName' => $entityName), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->clear($entityName);
    }
    public function close()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'close', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->close();
    }
    public function persist($entity)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'persist', array('entity' => $entity), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'remove', array('entity' => $entity), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'refresh', array('entity' => $entity), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'detach', array('entity' => $entity), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'merge', array('entity' => $entity), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'contains', array('entity' => $entity), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getEventManager', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getConfiguration', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'isOpen', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getUnitOfWork', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getProxyFactory', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'initializeObject', array('obj' => $obj), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'getFilters', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'isFiltersStateClean', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, 'hasFilters', array(), $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        return $this->valueHolderce866->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer85b55 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderce866) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderce866 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderce866->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer85b55 && ($this->initializer85b55->__invoke($valueHolderce866, $this, '__get', ['name' => $name], $this->initializer85b55) || 1) && $this->valueHolderce866 = $valueHolderce866;
        if (isset(self::$publicProperties2e4c9[$name])) {
            return $this->valueHolderce866->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
