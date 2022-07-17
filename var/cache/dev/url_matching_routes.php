<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article.index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/article/communaute' => [[['_route' => 'article.community', '_controller' => 'App\\Controller\\ArticleController::indexPublic'], null, ['GET' => 0], null, false, false, null]],
        '/article/creation' => [[['_route' => 'article.new', '_controller' => 'App\\Controller\\ArticleController::new'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category.index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/creation' => [[['_route' => 'category.new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security.login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security.logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security.registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/article/(?'
                    .'|edition/([^/]++)(*:197)'
                    .'|suppression/([^/]++)(*:225)'
                    .'|([^/]++)(*:241)'
                .')'
                .'|/category/(?'
                    .'|edition/([^/]++)(*:279)'
                    .'|suppression/([^/]++)(*:307)'
                .')'
                .'|/utilisateur/edition(?'
                    .'|/([^/]++)(*:348)'
                    .'|\\-mot\\-de\\-passe/([^/]++)(*:381)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'article.edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        225 => [[['_route' => 'article.delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'article.show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        279 => [[['_route' => 'category.edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        307 => [[['_route' => 'category.delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        348 => [[['_route' => 'user.edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        381 => [
            [['_route' => 'user.edit.password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
