<?php

namespace ContainerZ7PxLiG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3d1dc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer786e7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58ead = [
        
    ];

    public function getConnection()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getConnection', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getMetadataFactory', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getExpressionBuilder', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'beginTransaction', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getCache', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'transactional', array('func' => $func), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'commit', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->commit();
    }

    public function rollback()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'rollback', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getClassMetadata', array('className' => $className), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'createQuery', array('dql' => $dql), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'createNamedQuery', array('name' => $name), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'createQueryBuilder', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'flush', array('entity' => $entity), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'clear', array('entityName' => $entityName), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->clear($entityName);
    }

    public function close()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'close', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->close();
    }

    public function persist($entity)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'persist', array('entity' => $entity), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'remove', array('entity' => $entity), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'refresh', array('entity' => $entity), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'detach', array('entity' => $entity), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'merge', array('entity' => $entity), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'contains', array('entity' => $entity), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getEventManager', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getConfiguration', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'isOpen', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getUnitOfWork', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getProxyFactory', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'initializeObject', array('obj' => $obj), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'getFilters', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'isFiltersStateClean', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'hasFilters', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return $this->valueHolder3d1dc->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer786e7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3d1dc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3d1dc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3d1dc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, '__get', ['name' => $name], $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        if (isset(self::$publicProperties58ead[$name])) {
            return $this->valueHolder3d1dc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d1dc;

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

        $targetObject = $this->valueHolder3d1dc;
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
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d1dc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3d1dc;
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
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, '__isset', array('name' => $name), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d1dc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3d1dc;
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
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, '__unset', array('name' => $name), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d1dc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3d1dc;
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
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, '__clone', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        $this->valueHolder3d1dc = clone $this->valueHolder3d1dc;
    }

    public function __sleep()
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, '__sleep', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        return array('valueHolder3d1dc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer786e7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer786e7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'initializeProxy', array(), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3d1dc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3d1dc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
