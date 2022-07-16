<?php

namespace ContainerHaI82Qn;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        if ($this->valueHoldera3eaf === $returnValue = $this->valueHoldera3eaf->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer0a593 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera3eaf) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldera3eaf = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer0a593 && ($this->initializer0a593->__invoke($valueHoldera3eaf, $this, '__get', ['name' => $name], $this->initializer0a593) || 1) && $this->valueHoldera3eaf = $valueHoldera3eaf;

        if (isset(self::$publicProperties24cec[$name])) {
            return $this->valueHoldera3eaf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
