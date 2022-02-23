<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], [], []],
    'evenement_index' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement/']], [], [], []],
    'evenement_indexFront' => [[], ['_controller' => 'App\\Controller\\EvenementController::indexFront'], [], [['text', '/evenement/EvenementFront']], [], [], []],
    'evenement_new' => [[], ['_controller' => 'App\\Controller\\EvenementController::new'], [], [['text', '/evenement/new']], [], [], []],
    'evenement_show' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/evenement']], [], [], []],
    'evenement_edit' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/evenement']], [], [], []],
    'evenement_delete' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/evenement']], [], [], []],
    'ticket_index' => [[], ['_controller' => 'App\\Controller\\TicketController::index'], [], [['text', '/ticket/']], [], [], []],
    'ticket_new' => [['id_evenement'], ['_controller' => 'App\\Controller\\TicketController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id_evenement'], ['text', '/ticket']], [], [], []],
    'ticket_show' => [['id'], ['_controller' => 'App\\Controller\\TicketController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/ticket']], [], [], []],
    'ticket_edit' => [['id'], ['_controller' => 'App\\Controller\\TicketController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/ticket']], [], [], []],
    'ticket_delete' => [['id'], ['_controller' => 'App\\Controller\\TicketController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/ticket']], [], [], []],
];