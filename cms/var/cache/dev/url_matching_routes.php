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
        '/api/auth' => [[['_route' => 'api-auth', '_controller' => 'App\\Controller\\ApiController::Token'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'api-users', '_controller' => 'App\\Controller\\ApiController::users'], null, ['GET' => 0], null, false, false, null]],
        '/api/clients' => [[['_route' => 'api-clients', '_controller' => 'App\\Controller\\ApiController::clients'], null, ['GET' => 0], null, false, false, null]],
        '/api/tasks' => [[['_route' => 'api-tasks', '_controller' => 'App\\Controller\\ApiController::tasks'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/hourrates' => [[['_route' => 'api-hourrates', '_controller' => 'App\\Controller\\ApiController::hourrates'], null, ['GET' => 0], null, false, false, null]],
        '/api/transportrates' => [[['_route' => 'api-transport', '_controller' => 'App\\Controller\\ApiController::transport'], null, ['GET' => 0], null, false, false, null]],
        '/hourrates' => [[['_route' => 'hourrate', '_controller' => 'App\\Controller\\HourrateController::index'], null, null, null, false, false, null]],
        '/add-hourrate' => [[['_route' => 'add-hourrate', '_controller' => 'App\\Controller\\HourrateController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\PageController::dashboard'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/add-task' => [[['_route' => 'add-task', '_controller' => 'App\\Controller\\TaskController::add'], null, null, null, false, false, null]],
        '/tasks' => [[['_route' => 'tasks', '_controller' => 'App\\Controller\\TaskController::tasks'], null, null, null, false, false, null]],
        '/transportrates' => [[['_route' => 'transports', '_controller' => 'App\\Controller\\TransportController::index'], null, null, null, false, false, null]],
        '/add-transport' => [[['_route' => 'add-transport', '_controller' => 'App\\Controller\\TransportController::add'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'app_login_check'], null, null, null, false, false, null]],
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
                .'|/api/(?'
                    .'|users/([^/]++)(*:191)'
                    .'|tasks/(?'
                        .'|([^/]++)(*:216)'
                        .'|task/([^/]++)(*:237)'
                        .'|edit/([^/]++)(*:258)'
                        .'|delete/([^/]++)(*:281)'
                    .')'
                .')'
                .'|/mail/([^/]++)/([^/]++)(*:314)'
                .'|/pdf/([^/]++)/([^/]++)(*:344)'
                .'|/edit\\-(?'
                    .'|hourrate/([^/]++)(*:379)'
                    .'|t(?'
                        .'|ask/([^/]++)(*:403)'
                        .'|ransport/([^/]++)(*:428)'
                    .')'
                    .'|user/([^/]++)(*:450)'
                .')'
                .'|/delete\\-(?'
                    .'|hourrate/([^/]++)(*:488)'
                    .'|t(?'
                        .'|ask/([^/]++)(*:512)'
                        .'|ransport/([^/]++)(*:537)'
                    .')'
                    .'|user/([^/]++)(*:559)'
                .')'
                .'|/tasks/(?'
                    .'|([^/]++)(*:586)'
                    .'|client/([^/]++)(*:609)'
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
        191 => [[['_route' => 'api-users-byname', '_controller' => 'App\\Controller\\ApiController::usersByName'], ['name'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        216 => [[['_route' => 'api-tasks-byId', '_controller' => 'App\\Controller\\ApiController::tasksById'], ['userid'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        237 => [[['_route' => 'api-tasks-bytaskId', '_controller' => 'App\\Controller\\ApiController::tasksBytaskId'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        258 => [[['_route' => 'api-tasks-edit', '_controller' => 'App\\Controller\\ApiController::tasksEdit'], ['id'], ['GET' => 0, 'POST' => 1, 'PUT' => 2], null, false, true, null]],
        281 => [[['_route' => 'api-tasks-delete', '_controller' => 'App\\Controller\\ApiController::tasksDelete'], ['id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, true, null]],
        314 => [[['_route' => 'mail', '_controller' => 'App\\Controller\\FunctionController::mail'], ['days', 'id'], ['GET' => 0], null, false, true, null]],
        344 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\FunctionController::pdf'], ['days', 'id'], null, null, false, true, null]],
        379 => [[['_route' => 'edit-hourrate', '_controller' => 'App\\Controller\\HourrateController::edit'], ['id'], null, null, false, true, null]],
        403 => [[['_route' => 'edit-task', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], null, null, false, true, null]],
        428 => [[['_route' => 'edit-transport', '_controller' => 'App\\Controller\\TransportController::edit'], ['id'], null, null, false, true, null]],
        450 => [[['_route' => 'edit-user', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, true, null]],
        488 => [[['_route' => 'delete-hourrate', '_controller' => 'App\\Controller\\HourrateController::delete'], ['id'], null, null, false, true, null]],
        512 => [[['_route' => 'delete-task', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], null, null, false, true, null]],
        537 => [[['_route' => 'delete-transport', '_controller' => 'App\\Controller\\TransportController::delete'], ['id'], null, null, false, true, null]],
        559 => [[['_route' => 'delete-user', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null]],
        586 => [[['_route' => 'user-tasks', '_controller' => 'App\\Controller\\TaskController::detail'], ['id'], null, null, false, true, null]],
        609 => [
            [['_route' => 'client-tasks', '_controller' => 'App\\Controller\\TaskController::clientDetail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
