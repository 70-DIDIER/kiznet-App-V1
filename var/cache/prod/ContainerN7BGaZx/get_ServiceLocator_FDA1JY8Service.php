<?php

namespace ContainerN7BGaZx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FDA1JY8Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.fDA1JY8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fDA1JY8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'facture' => ['privates', '.errored..service_locator.fDA1JY8.App\\Entity\\Facture', NULL, 'Cannot autowire service ".service_locator.fDA1JY8": it needs an instance of "App\\Entity\\Facture" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'facture' => 'App\\Entity\\Facture',
            'em' => '?',
        ]);
    }
}
