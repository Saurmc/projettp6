<?php

namespace ContainerJEw0XAQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntrepriseDashboardControllershowFichePosteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X_C37gB.App\Controller\EntrepriseDashboardController::showFichePoste()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X_C37gB.App\\Controller\\EntrepriseDashboardController::showFichePoste()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ficheDePoste' => ['privates', '.errored..service_locator.X_C37gB.App\\Entity\\FicheDePoste', NULL, 'Cannot autowire service ".service_locator.X_C37gB": it needs an instance of "App\\Entity\\FicheDePoste" but this type has been excluded in "config/services.yaml".'],
        ], [
            'ficheDePoste' => 'App\\Entity\\FicheDePoste',
        ]))->withContext('App\\Controller\\EntrepriseDashboardController::showFichePoste()', $container);
    }
}
