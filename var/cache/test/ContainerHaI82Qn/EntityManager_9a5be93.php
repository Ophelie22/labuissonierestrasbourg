<?php

namespace ContainerHaI82Qn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera3eaf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0a593 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties24cec = [
        
    ];

    public function getConnection()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getConnection', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getMetadataFactory', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getExpressionBuilder', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'beginTransaction', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getCache', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'transactional', array('func' => $func), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'commit', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->commit();
    }

    public function rollback()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'rollback', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getClassMetadata', array('className' => $className), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'createQuery', array('dql' => $dql), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'createNamedQuery', array('name' => $name), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'createQueryBuilder', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'flush', array('entity' => $entity), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'clear', array('entityName' => $entityName), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->clear($entityName);
    }

    public function close()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'close', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->close();
    }

    public function persist($entity)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'persist', array('entity' => $entity), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'remove', array('entity' => $entity), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'refresh', array('entity' => $entity), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'detach', array('entity' => $entity), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'merge', array('entity' => $entity), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'contains', array('entity' => $entity), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getEventManager', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getConfiguration', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'isOpen', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getUnitOfWork', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getProxyFactory', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'initializeObject', array('obj' => $obj), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'getFilters', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'isFiltersStateClean', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'hasFilters', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return $this->valueHoldera3eaf->hasFilters();
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

        $instance->initializer0a593 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera3eaf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera3eaf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera3eaf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, '__get', ['name' => $name], $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        if (isset(self::$publicProperties24cec[$name])) {
            return $this->valueHoldera3eaf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3eaf;

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

        $targetObject = $this->valueHoldera3eaf;
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
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3eaf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera3eaf;
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
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, '__isset', array('name' => $name), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3eaf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera3eaf;
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
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, '__unset', array('name' => $name), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3eaf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera3eaf;
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
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, '__clone', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        $this->valueHoldera3eaf = clone $this->valueHoldera3eaf;
    }

    public function __sleep()
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, '__sleep', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        return array('valueHoldera3eaf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0a593 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0a593;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'initializeProxy', array(), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera3eaf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera3eaf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
