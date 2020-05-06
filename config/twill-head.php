<?php

return [
    'meta' => [
        ['charset' => 'utf-8'],
        ['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=Edge'>

        ['property' => 'og:title', 'content' => '{ogTitle}'],
        ['property' => 'og:title', 'content' => '{ogTitle}'],
        ['property' => 'og:title', 'content' => '{ogTitle}'],
        ['property' => 'og:site_name', 'content' => '{ogSiteName}'],
        ['property' => 'og:locale', 'content' => '{ogLocale}'],
        ['property' => 'og:type', 'content' => 'website'],
        ['property' => 'og:description', 'content' => '{ogDescription}'],
        ['property' => 'og:url', 'content' => '{canonicalUrl}'],
        ['property' => 'og:image', 'content' => '{ogImage}'],
        ['property' => 'og:image:width', 'content' => '1200'],
        ['property' => 'og:image:height', 'content' => '630'],

        ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, minimum-scale=1'],
        ['name' => 'twitter:title', 'content' => '{twitterTitle}'],
        ['name' => 'twitter:site', 'content' => '{twitterHandle}'],
        ['name' => 'description', 'content' => '{description}'],
        ['name' => 'twitter:description', 'content' => '{twitterDescription}'],
        ['name' => 'twitter:card', 'content' => 'summary_large_image'],
        ['name' => 'twitter:image', 'content' => '{twitterImage}'],
        ['name' => 'twitter:url', 'content' => '{canonicalUrl}'],
        ['name' => 'msapplication-TileColor', 'content' => '#ffffff'],
        ['name' => 'msapplication-config', 'content' => '/dist/images/favicons/browserconfig.xml'],
        ['name' => 'theme-color', 'content' => '#ffffff'],

        ['itemprop' => 'name', 'content' => '{title}'],
        ['itemprop' => 'description', 'content' => '{description}'],
        ['itemprop' => 'image', 'content' => '{seoImage }'],
    ],

    'link' => [
        ['rel' => 'canonical', 'href' => '{canonicalUrl}'],
        ['rel' => 'apple-touch-icon', 'sizes' => '180x180', 'href' => '/dist/images/favicons/apple-touch-icon.png'],
        ['rel' => 'icon" type="image/png', 'sizes' => '32x32', 'href' => '/dist/images/favicons/favicon-32x32.png'],
        ['rel' => 'icon" type="image/png', 'sizes' => '16x16', 'href' => '/dist/images/favicons/favicon-16x16.png'],
        ['rel' => 'manifest', 'href' => '/dist/images/favicons/site.webmanifest'],
        ['rel' => 'mask-icon', 'href' => '/dist/images/favicons/safari-pinned-tab.svg" color="#000000'],
        ['rel' => 'shortcut icon', 'href' => '/dist/images/favicons/favicon.ico'],
        ['rel' => 'icon', 'href' => '/dist/images/favicons/favicon.svg'],
    ]
];