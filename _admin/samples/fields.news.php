<?php
/**
* © LeoCRAFT Digital, "Catana CMS" https://catana.leocraft.digital
* @author D.A. Cherepanov <info@leocraft.com>
* @copyright LeoCRAFT Digital <catana.leocraft.digital>
* @version 1.0
**/
$fields = [
    'admin_id' => ['hidden',''],
    'id' => ['hidden',''],
    'page_id' => ['hidden',''],
    'cat_id' => ['hidden',''],
    'podcat_id' => ['hidden',''],
    'public' => ['hidden',''],
    'admin_id' => ['hidden',''],
    'comment_set' => ['hidden',''],
    'img' => ['hidden',''],
    'gallery' => ['hidden',''],

    '1' => [
        'date' => ['input','mdi-calendar-today'],
        'time' => ['input','mdi-clock'],
        'fin_date' => ['input','mdi-calendar-remove']
    ],

    'title' => ['input','mdi-format-header-1 green'],
    'descript' => ['textarea','mdi-format-header-2'],
    'short' => ['shortext',''],
    'text' => ['bigtext',''],
    'seo_title' => ['input','mdi-note'],
    'seo_descript' => ['textarea','mdi-note-outline'],
    'keywords' => ['textarea','mdi-file-word-box'],
    'tags' => ['input','mdi-tag-text-outline'],
    'param' => ['input','mdi-approval'],
    
    '2' => [
        'video' => ['input','mdi-youtube-tv'],
        'link' => ['input','mdi-link']
    ],
    
    '3' => [
        'spare' => ['input','mdi-file'],
        'alt_img' => ['input','mdi-image']
    ],
    
    'url' => ['input','mdi-link-variant green']
];