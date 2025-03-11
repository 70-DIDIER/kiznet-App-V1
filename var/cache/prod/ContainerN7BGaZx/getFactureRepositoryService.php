<?php

namespace ContainerN7BGaZx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFactureRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\FactureRepository' shared autowired service.
     *
     * @return \App\Repository\FactureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\FactureRepository'] = new \App\Repository\FactureRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
