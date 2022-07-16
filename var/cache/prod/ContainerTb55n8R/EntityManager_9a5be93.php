<?php

namespace ContainerTb55n8R;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdeff8 = null;
    private $initializera664c = null;
    private static $publicProperties2bb9e = [
        
    ];
    public function getConnection()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getConnection', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getMetadataFactory', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getExpressionBuilder', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'beginTransaction', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getCache', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getCache();
    }
    public function transactional($func)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'transactional', array('func' => $func), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'wrapInTransaction', array('func' => $func), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'commit', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->commit();
    }
    public function rollback()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'rollback', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getClassMetadata', array('className' => $className), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'createQuery', array('dql' => $dql), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'createNamedQuery', array('name' => $name), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'createQueryBuilder', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'flush', array('entity' => $entity), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'clear', array('entityName' => $entityName), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->clear($entityName);
    }
    public function close()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'close', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->close();
    }
    public function persist($entity)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'persist', array('entity' => $entity), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'remove', array('entity' => $entity), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'refresh', array('entity' => $entity), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'detach', array('entity' => $entity), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'merge', array('entity' => $entity), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getRepository', array('entityName' => $entityName), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'contains', array('entity' => $entity), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getEventManager', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getConfiguration', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'isOpen', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getUnitOfWork', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getProxyFactory', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'initializeObject', array('obj' => $obj), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'getFilters', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'isFiltersStateClean', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'hasFilters', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return $this->valueHolderdeff8->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera664c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderdeff8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdeff8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderdeff8->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, '__get', ['name' => $name], $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        if (isset(self::$publicProperties2bb9e[$name])) {
            return $this->valueHolderdeff8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdeff8;
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
        $targetObject = $this->valueHolderdeff8;
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
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdeff8;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdeff8;
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
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, '__isset', array('name' => $name), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdeff8;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdeff8;
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
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, '__unset', array('name' => $name), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdeff8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdeff8;
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
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, '__clone', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        $this->valueHolderdeff8 = clone $this->valueHolderdeff8;
    }
    public function __sleep()
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, '__sleep', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
        return array('valueHolderdeff8');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera664c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera664c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'initializeProxy', array(), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdeff8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdeff8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
