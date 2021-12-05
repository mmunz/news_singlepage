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
    'clearCacheOnLoad' => true,
    'version' => '0.1.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '10.4.6-10.4.99'
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
