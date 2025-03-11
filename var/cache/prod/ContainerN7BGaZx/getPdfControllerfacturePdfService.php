<?php

namespace ContainerN7BGaZx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPdfControllerfacturePdfService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Kkn0I7U.App\Controller\PdfController::facturePdf()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Kkn0I7U.App\\Controller\\PdfController::facturePdf()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'itemRepository' => ['privates', 'App\\Repository\\ItemRepository', 'getItemRepositoryService', true],
            'factureRepository' => ['privates', 'App\\Repository\\FactureRepository', 'getFactureRepositoryService', true],
        ], [
            'itemRepository' => 'App\\Repository\\ItemRepository',
            'factureRepository' => 'App\\Repository\\FactureRepository',
        ]))->withContext('App\\Controller\\PdfController::facturePdf()', $container);
    }
}
