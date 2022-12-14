<?php

namespace ContainerLhuSfje;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DRcwdFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D_rcwdF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D_rcwdF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CategoryController::createCategory' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\CategoryController::deleteCategory' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\CategoryController::detailsCategory' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\CategoryController::editAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\CategoryController::viewCategory' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.AW3Zsvt', 'get_ServiceLocator_AW3ZsvtService', true],
            'App\\Controller\\LoginController::loginAction' => ['privates', '.service_locator.948h2OS', 'get_ServiceLocator_948h2OSService', true],
            'App\\Controller\\LoginController::onAuthenticationSuccess' => ['privates', '.service_locator.l_ea6ff', 'get_ServiceLocator_LEa6ffService', true],
            'App\\Controller\\ProductController::createAction' => ['privates', '.service_locator.nBxFRYb', 'get_ServiceLocator_NBxFRYbService', true],
            'App\\Controller\\ProductController::deleteAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController::detailsAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController::editAction' => ['privates', '.service_locator.nBxFRYb', 'get_ServiceLocator_NBxFRYbService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController::insertAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController::listAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController::productByCatAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.5VaPsD5', 'get_ServiceLocator_5VaPsD5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CategoryController:createCategory' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\CategoryController:deleteCategory' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\CategoryController:detailsCategory' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\CategoryController:editAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\CategoryController:viewCategory' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.AW3Zsvt', 'get_ServiceLocator_AW3ZsvtService', true],
            'App\\Controller\\LoginController:loginAction' => ['privates', '.service_locator.948h2OS', 'get_ServiceLocator_948h2OSService', true],
            'App\\Controller\\LoginController:onAuthenticationSuccess' => ['privates', '.service_locator.l_ea6ff', 'get_ServiceLocator_LEa6ffService', true],
            'App\\Controller\\ProductController:createAction' => ['privates', '.service_locator.nBxFRYb', 'get_ServiceLocator_NBxFRYbService', true],
            'App\\Controller\\ProductController:deleteAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController:detailsAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController:editAction' => ['privates', '.service_locator.nBxFRYb', 'get_ServiceLocator_NBxFRYbService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController:insertAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController:listAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\ProductController:productByCatAction' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.5VaPsD5', 'get_ServiceLocator_5VaPsD5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CategoryController::createCategory' => '?',
            'App\\Controller\\CategoryController::deleteCategory' => '?',
            'App\\Controller\\CategoryController::detailsCategory' => '?',
            'App\\Controller\\CategoryController::editAction' => '?',
            'App\\Controller\\CategoryController::viewCategory' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\LoginController::loginAction' => '?',
            'App\\Controller\\LoginController::onAuthenticationSuccess' => '?',
            'App\\Controller\\ProductController::createAction' => '?',
            'App\\Controller\\ProductController::deleteAction' => '?',
            'App\\Controller\\ProductController::detailsAction' => '?',
            'App\\Controller\\ProductController::editAction' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::insertAction' => '?',
            'App\\Controller\\ProductController::listAction' => '?',
            'App\\Controller\\ProductController::productByCatAction' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CategoryController:createCategory' => '?',
            'App\\Controller\\CategoryController:deleteCategory' => '?',
            'App\\Controller\\CategoryController:detailsCategory' => '?',
            'App\\Controller\\CategoryController:editAction' => '?',
            'App\\Controller\\CategoryController:viewCategory' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\LoginController:loginAction' => '?',
            'App\\Controller\\LoginController:onAuthenticationSuccess' => '?',
            'App\\Controller\\ProductController:createAction' => '?',
            'App\\Controller\\ProductController:deleteAction' => '?',
            'App\\Controller\\ProductController:detailsAction' => '?',
            'App\\Controller\\ProductController:editAction' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:insertAction' => '?',
            'App\\Controller\\ProductController:listAction' => '?',
            'App\\Controller\\ProductController:productByCatAction' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
