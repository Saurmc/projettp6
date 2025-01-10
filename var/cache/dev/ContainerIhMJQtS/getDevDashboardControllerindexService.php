<?php

namespace ContainerIhMJQtS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDevDashboardControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GmDnOX4.App\Controller\DevDashboardController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GmDnOX4.App\\Controller\\DevDashboardController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ficheDePosteRepository' => ['privates', 'App\\Repository\\FicheDePosteRepository', 'getFicheDePosteRepositoryService', true],
        ], [
            'ficheDePosteRepository' => 'App\\Repository\\FicheDePosteRepository',
        ]))->withContext('App\\Controller\\DevDashboardController::index()', $container);
    }
}
