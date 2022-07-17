<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \App\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'isFavorite', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'isPublic', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'categories', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'marks', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'average', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'isFavorite', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'isPublic', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'categories', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'marks', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'average', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setUpdatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAtValue', []);

        return parent::setUpdatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $imageFile = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$imageFile]);

        parent::setImageFile($imageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName(?string $imageName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(?string $titre): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFavorite(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFavorite', []);

        return parent::getIsFavorite();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFavorite(bool $isFavorite): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFavorite', [$isFavorite]);

        return parent::setIsFavorite($isFavorite);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublic(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublic', []);

        return parent::getIsPublic();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublic(bool $isPublic): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublic', [$isPublic]);

        return parent::setIsPublic($isPublic);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeImmutable $createdAt): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeImmutable $updatedAt): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\App\Entity\Category $category): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\App\Entity\Category $category): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarks', []);

        return parent::getMarks();
    }

    /**
     * {@inheritDoc}
     */
    public function addMark(\App\Entity\Mark $mark): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMark', [$mark]);

        return parent::addMark($mark);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMark(\App\Entity\Mark $mark): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMark', [$mark]);

        return parent::removeMark($mark);
    }

    /**
     * {@inheritDoc}
     */
    public function getAverage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAverage', []);

        return parent::getAverage();
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

}