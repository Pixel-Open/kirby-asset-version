<?php

Kirby::plugin('pixelopen/asset-version', [
    'options'    => [
        'active' => true
    ],
    'components' => [
        'css' => function ($kirby, $url) {

            if ($kirby->option('pixelopen.asset-version.active')) {

                return dirname($url) . '/' . F::name($url) . '.css?v='. F::modified(Url::path($url));

            } else {
                return $url;
            }
        },
        'js'  => function ($kirby, $url) {

            if ($kirby->option('pixelopen.asset-version.active')) {

                return dirname($url) . '/' . F::name($url) . '.js?v='. F::modified(Url::path($url));

            } else {
                return $url;
            }
        }
    ]
]);
