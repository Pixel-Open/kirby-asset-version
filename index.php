<?php

Kirby::plugin('pixelopen/asset-version', [
    'options' => [
        'active' => true
    ],
    'components' => [
        'css' => function ($kirby, $url) {
            return addVersionToAsset($kirby, $url, 'css');
        },
        'js' => function ($kirby, $url) {
            return addVersionToAsset($kirby, $url, 'js');
        }
    ]
]);

/**
 * Adds a version parameter to an asset file based on its modification date
 *
 * @param \Kirby\Cms\App $kirby Kirby instance
 * @param string $url Asset URL
 * @param string $extension File extension (css, js, etc.)
 * @return string URL with added version or original URL
 */
function addVersionToAsset($kirby, $url, $extension) {
    if ($kirby->option('pixelopen.asset-version.active')) {
        return dirname($url) . '/' . F::name($url) . '.' . $extension . '?v=' . F::modified(Url::path($url));
    } else {
        return $url;
    }
}
