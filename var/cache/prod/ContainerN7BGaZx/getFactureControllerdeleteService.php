<?php

namespace ContainerN7BGaZx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFactureControllerdeleteService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.fDA1JY8.App\Controller\FactureController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fDA1JY8.App\\Controller\\FactureController::delete()'] = ($container->privates['.service_locator.fDA1JY8'] ?? $container->load('get_ServiceLocator_FDA1JY8Service'))->withContext('App\\Controller\\FactureController::delete()', $container);
    }
}
