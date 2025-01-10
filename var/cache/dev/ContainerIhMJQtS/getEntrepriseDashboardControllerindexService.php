<?php

namespace ContainerIhMJQtS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntrepriseDashboardControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Hqg49at.App\Controller\EntrepriseDashboardController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Hqg49at.App\\Controller\\EntrepriseDashboardController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ficheDePosteRepository' => ['privates', 'App\\Repository\\FicheDePosteRepository', 'getFicheDePosteRepositoryService', true],
            'devRepository' => ['privates', 'App\\Repository\\DevRepository', 'getDevRepositoryService', true],
        ], [
            'ficheDePosteRepository' => 'App\\Repository\\FicheDePosteRepository',
            'devRepository' => 'App\\Repository\\DevRepository',
        ]))->withContext('App\\Controller\\EntrepriseDashboardController::index()', $container);
    }
}
