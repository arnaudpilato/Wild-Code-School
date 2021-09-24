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
                .'|/(fr|es|en)(?'
                    .'|/(?'
                        .'|actor/(\\d+)(*:198)'
                        .'|categories(?'
                            .'|(*:219)'
                            .'|/(?'
                                .'|new(*:234)'
                                .'|([^/]++)(*:250)'
                            .')'
                        .')'
                        .'|episode(?'
                            .'|(*:270)'
                            .'|/(?'
                                .'|new(*:285)'
                                .'|([^/]++)(?'
                                    .'|(*:304)'
                                    .'|/edit(*:317)'
                                    .'|(*:325)'
                                .')'
                            .')'
                        .')'
                        .'|my\\-profile(*:347)'
                        .'|programs(?'
                            .'|(*:366)'
                            .'|/(?'
                                .'|new(*:381)'
                                .'|show/([^/]++)(*:402)'
                                .'|([^/]++)/season(?'
                                    .'|/([^/]++)(*:437)'
                                    .'|s/([^/]++)/episodes/([^/]++)(*:473)'
                                .')'
                            .')'
                            .'|([^/]++)/edit(*:496)'
                            .'|/(?'
                                .'|comment/([^/]++)/delete(*:531)'
                                .'|([^/]++)/watchlist(*:557)'
                            .')'
                        .')'
                        .'|season(?'
                            .'|(*:576)'
                            .'|/(?'
                                .'|new(*:591)'
                                .'|([^/]++)(?'
                                    .'|(*:610)'
                                    .'|/edit(*:623)'
                                    .'|(*:631)'
                                .')'
                            .')'
                        .')'
                        .'|register(*:650)'
                        .'|verify/email(*:670)'
                        .'|log(?'
                            .'|in(*:686)'
                            .'|out(*:697)'
                        .')'
                    .')'
                    .'|(*:707)'
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
        198 => [[['_route' => 'actor_show', '_controller' => 'App\\Controller\\ActorController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], ['_locale'], null, null, true, false, null]],
        234 => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], ['_locale'], null, null, false, false, null]],
        250 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['_locale', 'categoryName'], null, null, false, true, null]],
        270 => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        285 => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        304 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['_locale', 'slug'], ['DELETE' => 0], null, false, true, null]],
        347 => [[['_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfileController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        366 => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], ['_locale'], null, null, true, false, null]],
        381 => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], ['_locale'], null, null, false, false, null]],
        402 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'program_season_show', '_controller' => 'App\\Controller\\ProgramController::showSeason'], ['_locale', 'slug', 'season'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'program_episode_show', '_controller' => 'App\\Controller\\ProgramController::showEpisode'], ['_locale', 'program_slug', 'season', 'episode_slug'], null, null, false, true, null]],
        496 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::edit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [[['_route' => 'program_delete_comment', '_controller' => 'App\\Controller\\ProgramController::deleteComment'], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        557 => [[['_route' => 'program_watchlist', '_controller' => 'App\\Controller\\ProgramController::addToWatchlist'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        576 => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        591 => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        610 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        623 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        631 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        650 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], ['_locale'], null, null, false, false, null]],
        670 => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\SecurityController::verifyUserEmail'], ['_locale'], null, null, false, false, null]],
        686 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        697 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], ['_locale'], null, null, false, false, null]],
        707 => [
            [['_route' => 'app_index', '_controller' => 'App\\Controller\\DefautController::index'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
