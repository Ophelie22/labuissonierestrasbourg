<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
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
    'home.index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'security.login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'security.logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'security.registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], [], []],
    'user.edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition']], [], [], []],
    'user.edit.password' => [['id'], ['_controller' => 'App\\Controller\\UserController::editPassword'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur/edition-mot-de-passe']], [], [], []],
];