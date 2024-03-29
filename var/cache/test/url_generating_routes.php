<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'article.index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article']], [], [], []],
    'article.community' => [[], ['_controller' => 'App\\Controller\\ArticleController::indexPublic'], [], [['text', '/article/communaute']], [], [], []],
    'article.new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/article/creation']], [], [], []],
    'article.edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/edition']], [], [], []],
    'article.delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/suppression']], [], [], []],
    'article.show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'category.index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category']], [], [], []],
    'category.new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/creation']], [], [], []],
    'category.edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/edition']], [], [], []],
    'category.delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/suppression']], [], [], []],
    'contact.index' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'home.index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'security.login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'security.logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'security.registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], [], []],
    'user.edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition']], [], [], []],
    'user.edit.password' => [['id'], ['_controller' => 'App\\Controller\\UserController::editPassword'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition-mot-de-passe']], [], [], []],
];
