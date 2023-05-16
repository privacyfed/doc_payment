<?php

use Illuminate\Support\Str;

$moduleName = 'Payment';

return [
    'baseUrl' => '',
    'production' => false,
<<<<<<< HEAD
    'siteName' => 'Modulo '.$moduleName,
    'siteDescription' => 'Modulo '.$moduleName,
=======
    'siteName' => 'Modulo Media',
    'siteDescription' => 'Modulo Media',
>>>>>>> b15ad18 (.)
    'lang' => 'it',

    'collections' => [
        'posts' => [
            'path' => function ($page) {
<<<<<<< HEAD
                //return $page->lang.'/posts/'.Str::slug($page->getFilename());
                //return 'posts/' . ($page->featured ? 'featured/' : '') . Str::slug($page->getFilename());

                return 'posts/'.Str::slug($page->getFilename());
=======
                return $page->lang.'/posts/'.Str::slug($page->getFilename());
>>>>>>> b15ad18 (.)
            },
        ],
        'docs' => [
            'path' => function ($page) {
<<<<<<< HEAD
                //return $page->lang.'/docs/'.Str::slug($page->getFilename());
                return 'docs/'.Str::slug($page->getFilename());
=======
                return $page->lang.'/docs/'.Str::slug($page->getFilename());
>>>>>>> b15ad18 (.)
            },
        ],
    ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isItemActive' => function ($page, $item) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($item->getPath()));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },/*
    'url' => function ($page, $path) {
<<<<<<< HEAD
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    */
    'url' => function ($page, $path) {
        if (Str::startsWith($path, 'http')) {
            return $path;
        }
         //return url('/'.$page->lang.'/'.trimPath($path));
        return url('/'.trimPath($path));
    },

    'children' => function ($page, $docs) {
        return $docs->where('parent_id', $page->id);
=======
        if (Str::startsWith($path, 'http')) {
            return $path;
        }
        // return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
        return url('/'.$page->lang.'/'.trimPath($path));
    },

    'children' => function ($page, $docs) {
        return $docs->where('parent_id', $page->id);
    // return [];
>>>>>>> b15ad18 (.)
    },
];