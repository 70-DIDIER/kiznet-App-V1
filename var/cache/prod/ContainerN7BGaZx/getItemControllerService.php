<?php

namespace ContainerN7BGaZx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getItemControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ItemController' shared autowired service.
     *
     * @return \App\Controller\ItemController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ItemController'] = $instance = new \App\Controller\ItemController();

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\ItemController', $container));

        return $instance;
    }
}
