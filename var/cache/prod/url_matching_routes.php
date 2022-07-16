<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article.index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/article/communaute' => [[['_route' => 'article.community', '_controller' => 'App\\Controller\\ArticleController::indexPublic'], null, ['GET' => 0], null, false, false, null]],
        '/article/creation' => [[['_route' => 'article.new', '_controller' => 'App\\Controller\\ArticleController::new'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category.index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/category/creation' => [[['_route' => 'category.new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security.login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security.logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security.registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/article/(?'
                    .'|edition/([^/]++)(*:35)'
                    .'|suppression/([^/]++)(*:62)'
                    .'|([^/]++)(*:77)'
                .')'
                .'|/category/(?'
                    .'|edition/([^/]++)(*:114)'
                    .'|suppression/([^/]++)(*:142)'
                .')'
                .'|/utilisateur/edition(?'
                    .'|/([^/]++)(*:183)'
                    .'|\\-mot\\-de\\-passe/([^/]++)(*:216)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'article.edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        62 => [[['_route' => 'article.delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'article.show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        114 => [[['_route' => 'category.edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        142 => [[['_route' => 'category.delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        183 => [[['_route' => 'user.edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        216 => [
            [['_route' => 'user.edit.password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
