<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'news_singlepage',
    'description' => 'Extends tx_news with a field to link to a single page uid for detail view content.',
    'category' => 'plugin',
    'author' => 'Manuel Munz',
    'author_email' => 't3dev@comuno.net',
    'state' => 'alpha',
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '13.4.0-13.4.99'
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
