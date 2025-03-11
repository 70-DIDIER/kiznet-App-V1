<?php

namespace ContainerN7BGaZx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\FactureController::index' => ['privates', '.service_locator.92fUfU2.App\\Controller\\FactureController::index()', 'getFactureControllerindexService', true],
            'App\\Controller\\FactureController::create' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\FactureController::create()', 'getFactureControllercreateService', true],
            'App\\Controller\\FactureController::update' => ['privates', '.service_locator.fDA1JY8.App\\Controller\\FactureController::update()', 'getFactureControllerupdateService', true],
            'App\\Controller\\FactureController::delete' => ['privates', '.service_locator.fDA1JY8.App\\Controller\\FactureController::delete()', 'getFactureControllerdeleteService', true],
            'App\\Controller\\ItemController::index' => ['privates', '.service_locator.FEldOvz.App\\Controller\\ItemController::index()', 'getItemControllerindexService', true],
            'App\\Controller\\ItemController::create' => ['privates', '.service_locator.llMroG2.App\\Controller\\ItemController::create()', 'getItemControllercreateService', true],
            'App\\Controller\\ItemController::update' => ['privates', '.service_locator.hmCQJaR.App\\Controller\\ItemController::update()', 'getItemControllerupdateService', true],
            'App\\Controller\\ItemController::delete' => ['privates', '.service_locator.hmCQJaR.App\\Controller\\ItemController::delete()', 'getItemControllerdeleteService', true],
            'App\\Controller\\PdfController::facturePdf' => ['privates', '.service_locator.Kkn0I7U.App\\Controller\\PdfController::facturePdf()', 'getPdfControllerfacturePdfService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\FactureController:index' => ['privates', '.service_locator.92fUfU2.App\\Controller\\FactureController::index()', 'getFactureControllerindexService', true],
            'App\\Controller\\FactureController:create' => ['privates', '.service_locator.Kq27LHM.App\\Controller\\FactureController::create()', 'getFactureControllercreateService', true],
            'App\\Controller\\FactureController:update' => ['privates', '.service_locator.fDA1JY8.App\\Controller\\FactureController::update()', 'getFactureControllerupdateService', true],
            'App\\Controller\\FactureController:delete' => ['privates', '.service_locator.fDA1JY8.App\\Controller\\FactureController::delete()', 'getFactureControllerdeleteService', true],
            'App\\Controller\\ItemController:index' => ['privates', '.service_locator.FEldOvz.App\\Controller\\ItemController::index()', 'getItemControllerindexService', true],
            'App\\Controller\\ItemController:create' => ['privates', '.service_locator.llMroG2.App\\Controller\\ItemController::create()', 'getItemControllercreateService', true],
            'App\\Controller\\ItemController:update' => ['privates', '.service_locator.hmCQJaR.App\\Controller\\ItemController::update()', 'getItemControllerupdateService', true],
            'App\\Controller\\ItemController:delete' => ['privates', '.service_locator.hmCQJaR.App\\Controller\\ItemController::delete()', 'getItemControllerdeleteService', true],
            'App\\Controller\\PdfController:facturePdf' => ['privates', '.service_locator.Kkn0I7U.App\\Controller\\PdfController::facturePdf()', 'getPdfControllerfacturePdfService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\FactureController::index' => '?',
            'App\\Controller\\FactureController::create' => '?',
            'App\\Controller\\FactureController::update' => '?',
            'App\\Controller\\FactureController::delete' => '?',
            'App\\Controller\\ItemController::index' => '?',
            'App\\Controller\\ItemController::create' => '?',
            'App\\Controller\\ItemController::update' => '?',
            'App\\Controller\\ItemController::delete' => '?',
            'App\\Controller\\PdfController::facturePdf' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\FactureController:index' => '?',
            'App\\Controller\\FactureController:create' => '?',
            'App\\Controller\\FactureController:update' => '?',
            'App\\Controller\\FactureController:delete' => '?',
            'App\\Controller\\ItemController:index' => '?',
            'App\\Controller\\ItemController:create' => '?',
            'App\\Controller\\ItemController:update' => '?',
            'App\\Controller\\ItemController:delete' => '?',
            'App\\Controller\\PdfController:facturePdf' => '?',
        ]));
    }
}
