<?php

namespace ContainerI4EfncN;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7626e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55823 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4de48 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer55823 && ($this->initializer55823->__invoke($valueHolder7626e, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer55823) || 1) && $this->valueHolder7626e = $valueHolder7626e;

        if ($this->valueHolder7626e === $returnValue = $this->valueHolder7626e->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer55823 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder7626e) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder7626e = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer55823 && ($this->initializer55823->__invoke($valueHolder7626e, $this, '__get', ['name' => $name], $this->initializer55823) || 1) && $this->valueHolder7626e = $valueHolder7626e;

        if (isset(self::$publicProperties4de48[$name])) {
            return $this->valueHolder7626e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7626e;

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

        $targetObject = $this->valueHolder7626e;
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
        $this->initializer55823 && ($this->initializer55823->__invoke($valueHolder7626e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55823) || 1) && $this->valueHolder7626e = $valueHolder7626e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7626e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7626e;
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
        $this->initializer55823 && ($this->initializer55823->__invoke($valueHolder7626e, $this, '__isset', array('name' => $name), $this->initializer55823) || 1) && $this->valueHolder7626e = $valueHolder7626e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7626e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7626e;
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
        $this->initializer55823 && ($this->initializer55823->__invoke($valueHolder7626e, $this, '__unset', array('name' => $name), $this->initializer55823) || 1) && $this->valueHolder7626e = $valueHolder7626e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7626e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7626e;
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
        $this->initializer55823 && ($this->initializer55823->__invoke($valueHolder7626e, $this, '__clone', array(), $this->initializer55823) || 1) && $this->valueHolder7626e = $valueHolder7626e;

        $this->valueHolder7626e = clone $this->valueHolder7626e;
    }

    public function __sleep()
    {
        $this->initializer55823 && ($this->initializer55823->__invoke($valueHolder7626e, $this, '__sleep', array(), $this->initializer55823) || 1) && $this->valueHolder7626e = $valueHolder7626e;

        return array('valueHolder7626e');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55823 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55823;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55823 && ($this->initializer55823->__invoke($valueHolder7626e, $this, 'initializeProxy', array(), $this->initializer55823) || 1) && $this->valueHolder7626e = $valueHolder7626e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7626e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7626e;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
