<?php

namespace ContainerNLa5dSC;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder37d83 = null;
    private $initializer87a76 = null;
    private static $publicPropertiesf092c = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        if ($this->valueHolder37d83 === $returnValue = $this->valueHolder37d83->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer87a76 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder37d83) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder37d83 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer87a76 && ($this->initializer87a76->__invoke($valueHolder37d83, $this, '__get', ['name' => $name], $this->initializer87a76) || 1) && $this->valueHolder37d83 = $valueHolder37d83;
        if (isset(self::$publicPropertiesf092c[$name])) {
            return $this->valueHolder37d83->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
