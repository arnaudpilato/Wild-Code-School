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
        '/categories' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, true, false, null]],
        '/categories/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\DefautController::index'], null, null, null, false, false, null]],
        '/episode' => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/episode/new' => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/programs' => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], null, null, null, true, false, null]],
        '/programs/new' => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], null, null, null, false, false, null]],
        '/season' => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/season/new' => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/actor/(\\d+)(*:181)'
                .'|/categories/([^/]++)(*:209)'
                .'|/episode/([^/]++)(?'
                    .'|(*:237)'
                    .'|/edit(*:250)'
                    .'|(*:258)'
                .')'
                .'|/programs/(?'
                    .'|show/(\\d+)(*:290)'
                    .'|(\\d+)/season/(\\d+)(*:316)'
                    .'|([^/]++)/seasons/([^/]++)/episodes/([^/]++)(*:367)'
                .')'
                .'|/season/([^/]++)(?'
                    .'|(*:395)'
                    .'|/edit(*:408)'
                    .'|(*:416)'
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
        181 => [[['_route' => 'actor_show', '_controller' => 'App\\Controller\\ActorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['categoryName'], null, null, false, true, null]],
        237 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        290 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'program_season_show', '_controller' => 'App\\Controller\\ProgramController::showSeason'], ['program', 'season'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'program_episode_show', '_controller' => 'App\\Controller\\ProgramController::showEpisode'], ['program', 'season', 'episode'], null, null, false, true, null]],
        395 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        408 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        416 => [
            [['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
