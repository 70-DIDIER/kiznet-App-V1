<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Item extends \App\Entity\Item implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'designation' => [parent::class, 'designation', null],
        "\0".parent::class."\0".'facture' => [parent::class, 'facture', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'prix_unitaire' => [parent::class, 'prix_unitaire', null],
        "\0".parent::class."\0".'qte' => [parent::class, 'qte', null],
        'designation' => [parent::class, 'designation', null],
        'facture' => [parent::class, 'facture', null],
        'id' => [parent::class, 'id', null],
        'prix_unitaire' => [parent::class, 'prix_unitaire', null],
        'qte' => [parent::class, 'qte', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
