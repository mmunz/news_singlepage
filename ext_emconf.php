<?php

/* * *************************************************************
 * Extension Manager/Repository config file for ext: "news_singlepage"
 *  * ************************************************************* */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'news_singlepage',
    'description' => 'Extends tx_news with a field to link to a single page uid for detail view content.',
    'category' => 'plugin',
    'author' => 'Manuel Munz',
    'author_email' => 't3dev@comuno.net',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => FALSE,
    'createDirs' => '',
    'clearCacheOnLoad' => TRUE,
    'version' => '0.0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-7.6.99',
            'news' => '4.2.0-4.9.9'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    'autoload' => [
        'psr-4' => [
            'C1\\NewsSinglepage\\' => 'Classes',
        ]
    ]
);
