<?php

class structure_post
{
    public static $page_structure = [
        'components' => [
            'Header',
            'Post',
            'Recommendation',
            'Footer'
        ],
        'page_scripts' => [
            'jquery.min.js',
            'lib.js',
            'jquery.justifiedGallery.min.js',
            'blocksit.min.js',
            'post.js',
            'common.def.js'
        ],
        'page_css' => [
            'style.css',
            'top_post.css',
            'header.post.css',
            'preview_post.css',
            'justifiedGallery.min.css',
            'post.css'
        ]
    ];
}