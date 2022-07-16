<?php

namespace ContainerGMxN9jC;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdeff8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera664c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2bb9e = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;

        if ($this->valueHolderdeff8 === $returnValue = $this->valueHolderdeff8->paginate($target, $page, $limit, $options)) {
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

        $instance->initializera664c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderdeff8) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderdeff8 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera664c && ($this->initializera664c->__invoke($valueHolderdeff8, $this, '__get', ['name' => $name], $this->initializera664c) || 1) && $this->valueHolderdeff8 = $valueHolderdeff8;

        if (isset(self::$publicProperties2bb9e[$name])) {
            return $this->valueHolderdeff8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
