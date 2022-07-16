<?php

namespace ContainerZ7PxLiG;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        if ($this->valueHolder3d1dc === $returnValue = $this->valueHolder3d1dc->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer786e7 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder3d1dc) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder3d1dc = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer786e7 && ($this->initializer786e7->__invoke($valueHolder3d1dc, $this, '__get', ['name' => $name], $this->initializer786e7) || 1) && $this->valueHolder3d1dc = $valueHolder3d1dc;

        if (isset(self::$publicProperties58ead[$name])) {
            return $this->valueHolder3d1dc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
