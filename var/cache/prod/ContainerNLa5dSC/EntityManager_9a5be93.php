<?php

namespace ContainerNLa5dSC;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder37d83 = null;
    private $initializer87a76 = null;
    private static $publicPropertiesf092c = [
        
    ];
    public function getConnection()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getConnection', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getMetadataFactory', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getExpressionBuilder', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'beginTransaction', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getCache', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getCache();
    }
    public function transactional($func)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'transactional', array('func' => $func), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'wrapInTransaction', array('func' => $func), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'commit', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->commit();
    }
    public function rollback()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'rollback', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getClassMetadata', array('className' => $className), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'createQuery', array('dql' => $dql), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'createNamedQuery', array('name' => $name), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'createQueryBuilder', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'flush', array('entity' => $entity), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'clear', array('entityName' => $entityName), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->clear($entityName);
    }
    public function close()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'close', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->close();
    }
    public function persist($entity)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'persist', array('entity' => $entity), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'remove', array('entity' => $entity), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'refresh', array('entity' => $entity), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'detach', array('entity' => $entity), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'merge', array('entity' => $entity), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getRepository', array('entityName' => $entityName), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'contains', array('entity' => $entity), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getEventManager', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getConfiguration', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'isOpen', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getUnitOfWork', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getProxyFactory', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'initializeObject', array('obj' => $obj), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'getFilters', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'isFiltersStateClean', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'hasFilters', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return $this->valueHolder37d83->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer87a76 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder37d83) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder37d83 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder37d83->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, '__get', ['name' => $name], $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        if (isset(self::$publicPropertiesf092c[$name])) {
            return $this->valueHolder37d83->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37d83;
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
        $targetObject = $this->valueHolder37d83;
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
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37d83;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder37d83;
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
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, '__isset', array('name' => $name), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37d83;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder37d83;
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
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, '__unset', array('name' => $name), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37d83;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder37d83;
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
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, '__clone', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        $this->valueHolder37d83 = clone $this->valueHolder37d83;
    }
    public function __sleep()
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, '__sleep', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        return array('valueHolder37d83');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer87a76 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer87a76;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'initializeProxy', array(), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder37d83;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder37d83;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
