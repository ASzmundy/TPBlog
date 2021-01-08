<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\AboutController::index'], [], [['text', '/about']], [], []],
    'article_index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article/']], [], []],
    'article_new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/article/new']], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/article']], [], []],
    'article_edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/article']], [], []],
    'article_delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/article']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\AuthController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\AuthController::logout'], [], [['text', '/logout']], [], []],
    'categorie_index' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie/']], [], []],
    'categorie_new' => [[], ['_controller' => 'App\\Controller\\CategorieController::new'], [], [['text', '/categorie/new']], [], []],
    'categorie_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'categorie_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/categorie']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_editmail' => [['id'], ['_controller' => 'App\\Controller\\UserController::editmail'], [], [['text', '/editmail'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_editname' => [['id'], ['_controller' => 'App\\Controller\\UserController::editname'], [], [['text', '/editname'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/']], [], []],
];
