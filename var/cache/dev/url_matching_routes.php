<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/dev/dashboard' => [[['_route' => 'dev_dashboard', '_controller' => 'App\\Controller\\DevDashboardController::index'], null, null, null, false, false, null]],
        '/dev/profile' => [[['_route' => 'app_dev_profile', '_controller' => 'App\\Controller\\DevDashboardController::profile'], null, null, null, false, false, null]],
        '/entreprise/profile' => [[['_route' => 'entreprise_profile', '_controller' => 'App\\Controller\\EntrepriseDashboardController::profile'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register/dev' => [[['_route' => 'register_dev', '_controller' => 'App\\Controller\\RegistrationController::registerDev'], null, null, null, false, false, null]],
        '/register/company' => [[['_route' => 'register_company', '_controller' => 'App\\Controller\\RegistrationController::registerCompany'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/entreprise/dashboard' => [[['_route' => 'entreprise_dashboard', '_controller' => 'App\\Controller\\EntrepriseDashboardController::index'], null, null, null, false, false, null]],
        '/entreprise/profile/edit' => [[['_route' => 'entreprise_profile_edit', '_controller' => 'App\\Controller\\EntrepriseDashboardController::editProfile'], null, null, null, false, false, null]],
        '/entreprise/fiche-poste/new' => [[['_route' => 'fiche_poste_new', '_controller' => 'App\\Controller\\EntrepriseDashboardController::newFichePoste'], null, null, null, false, false, null]],
        '/entreprise/about' => [[['_route' => 'entreprise_about', '_controller' => 'App\\Controller\\EntrepriseDashboardController::about'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about_us', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/entreprise/fiche\\-poste/([^/]++)(?'
                    .'|/(?'
                        .'|delete(?'
                            .'|(*:91)'
                        .')'
                        .'|edit(*:103)'
                    .')'
                    .'|(*:112)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        91 => [
            [['_route' => 'entreprise_fiche_poste_delete', '_controller' => 'App\\Controller\\EntrepriseDashboardController::deleteFichePoste'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'fiche_poste_delete', '_controller' => 'App\\Controller\\FicheDePosteController::delete'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        103 => [[['_route' => 'fiche_poste_edit', '_controller' => 'App\\Controller\\EntrepriseDashboardController::editFichePoste'], ['id'], null, null, false, false, null]],
        112 => [
            [['_route' => 'fiche_poste_show', '_controller' => 'App\\Controller\\FicheDePosteController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
