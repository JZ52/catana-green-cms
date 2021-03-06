<?php
/**
* © LeoCRAFT Digital, "Catana CMS" https://catana.leocraft.digital
* @author Dmitry Brain (D.A.Cherepanov) <info@leocraft.com>
* @copyright LeoCRAFT Digital <catana.leocraft.digital>
* @version 1.0
**/
$fields = [
    'admin_id' => ['hidden',''],
    'id' => ['hidden',''],
    'view_id' => ['hidden',''],
    'page_id' => ['hidden',''],
    'note_id' => ['hidden',''],
    'public' => ['hidden',''],
    'admin_id' => ['hidden',''],
    'comment_set' => ['hidden',''],
    'img' => ['hidden',''],
    'altimg' => ['hidden',''],
    'gallery' => ['hidden',''],

    'title' => ['input','mdi-format-header-1 green'],
    'descript' => ['textarea','mdi-format-header-2'],
    'short' => ['shortext',''],
    'keywords' => ['textarea','mdi-file-word-box'],
    'tags' => ['input','mdi-tag-text-outline'],
    'param' => ['input','mdi-approval'],

    '1' => [
        'date' => ['input','mdi-calendar-today'],
        'time' => ['input','mdi-clock'],
        'fin_date' => ['input','mdi-calendar-remove clear']
    ],

    '2' => [
        'link' => ['input','mdi-link'],
        'spare' => ['input','mdi-file']
    ],

    'url' => ['input','mdi-link-variant green']
];