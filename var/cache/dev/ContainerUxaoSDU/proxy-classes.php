<?php

namespace ContainerUxaoSDU;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7fe3a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1e518 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties66733 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getConnection', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getMetadataFactory', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getExpressionBuilder', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'beginTransaction', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getCache', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'transactional', array('func' => $func), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'commit', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->commit();
    }

    public function rollback()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'rollback', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getClassMetadata', array('className' => $className), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'createQuery', array('dql' => $dql), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'createNamedQuery', array('name' => $name), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'createQueryBuilder', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'flush', array('entity' => $entity), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'clear', array('entityName' => $entityName), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->clear($entityName);
    }

    public function close()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'close', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->close();
    }

    public function persist($entity)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'persist', array('entity' => $entity), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'remove', array('entity' => $entity), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'refresh', array('entity' => $entity), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'detach', array('entity' => $entity), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'merge', array('entity' => $entity), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'contains', array('entity' => $entity), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getEventManager', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getConfiguration', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'isOpen', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getUnitOfWork', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getProxyFactory', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'initializeObject', array('obj' => $obj), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'getFilters', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'isFiltersStateClean', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'hasFilters', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return $this->valueHolder7fe3a->hasFilters();
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

        $instance->initializer1e518 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7fe3a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7fe3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7fe3a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, '__get', ['name' => $name], $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        if (isset(self::$publicProperties66733[$name])) {
            return $this->valueHolder7fe3a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fe3a;

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

        $targetObject = $this->valueHolder7fe3a;
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
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fe3a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7fe3a;
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
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, '__isset', array('name' => $name), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fe3a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7fe3a;
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
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, '__unset', array('name' => $name), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fe3a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7fe3a;
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
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, '__clone', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        $this->valueHolder7fe3a = clone $this->valueHolder7fe3a;
    }

    public function __sleep()
    {
        $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, '__sleep', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;

        return array('valueHolder7fe3a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1e518 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1e518;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1e518 && ($this->initializer1e518->__invoke($valueHolder7fe3a, $this, 'initializeProxy', array(), $this->initializer1e518) || 1) && $this->valueHolder7fe3a = $valueHolder7fe3a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7fe3a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7fe3a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
