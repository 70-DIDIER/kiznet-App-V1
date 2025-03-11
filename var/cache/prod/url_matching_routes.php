<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/facture' => [[['_route' => 'app_facture', '_controller' => 'App\\Controller\\FactureController::index'], null, null, null, false, false, null]],
        '/facture/create' => [[['_route' => 'app_facture_create', '_controller' => 'App\\Controller\\FactureController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/facture/([^/]++)/(?'
                    .'|update(*:34)'
                    .'|delete(*:47)'
                    .'|item/index(*:64)'
                .')'
                .'|/item/(?'
                    .'|create/([^/]++)(*:96)'
                    .'|update/([^/]++)(*:118)'
                    .'|delete/([^/]++)(*:141)'
                .')'
                .'|/pdf/facture/([^/]++)(*:171)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_facture_update', '_controller' => 'App\\Controller\\FactureController::update'], ['id'], null, null, false, false, null]],
        47 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], null, null, false, false, null]],
        64 => [[['_route' => 'app_item_index', '_controller' => 'App\\Controller\\ItemController::index'], ['factureId'], null, null, false, false, null]],
        96 => [[['_route' => 'app_item_create', '_controller' => 'App\\Controller\\ItemController::create'], ['factureId'], null, null, false, true, null]],
        118 => [[['_route' => 'app_item_update', '_controller' => 'App\\Controller\\ItemController::update'], ['id'], null, null, false, true, null]],
        141 => [[['_route' => 'app_item_delete', '_controller' => 'App\\Controller\\ItemController::delete'], ['id'], null, null, false, true, null]],
        171 => [
            [['_route' => 'app_facture_pdf', '_controller' => 'App\\Controller\\PdfController::facturePdf'], ['factureId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
