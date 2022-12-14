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
    'app_api_login' => [[], ['_controller' => 'App\\Controller\\ApiLoginController::index'], [], [['text', '/api/login']], [], [], []],
    'category_view' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::viewCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/view']], [], [], []],
    'category_details' => [[], ['_controller' => 'App\\Controller\\CategoryController::detailsCategory'], [], [['text', '/category/details']], [], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::deleteCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/delete']], [], [], []],
    'category_create' => [[], ['_controller' => 'App\\Controller\\CategoryController::createCategory'], [], [['text', '/category/create']], [], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::editAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/edit']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'product_list' => [[], ['_controller' => 'App\\Controller\\ProductController::listAction'], [], [['text', '/']], [], [], []],
    'product' => [[], ['_controller' => 'App\\Controller\\ProductController::insertAction'], [], [['text', '/insertUser']], [], [], []],
    'product_details' => [['id'], ['_controller' => 'App\\Controller\\ProductController::detailsAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/details']], [], [], []],
    'product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::deleteAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/delete']], [], [], []],
    'product_create' => [[], ['_controller' => 'App\\Controller\\ProductController::createAction'], [], [['text', '/product/create']], [], [], []],
    'productByCat' => [['id'], ['_controller' => 'App\\Controller\\ProductController::productByCatAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/productByCat']], [], [], []],
    'product_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::editAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/edit']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\ProductController::listAction'], [], [['text', '/']], [], [], []],
];
