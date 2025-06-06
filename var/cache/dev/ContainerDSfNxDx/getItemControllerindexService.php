<?php

namespace ContainerDSfNxDx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getItemControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FEldOvz.App\Controller\ItemController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FEldOvz.App\\Controller\\ItemController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'repository' => ['privates', 'App\\Repository\\ItemRepository', 'getItemRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\ItemRepository',
        ]))->withContext('App\\Controller\\ItemController::index()', $container);
    }
}
