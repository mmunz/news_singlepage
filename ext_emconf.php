<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'news_singlepage',
    'description' => 'Extends tx_news with a field to link to a single page uid for detail view content.',
    'category' => 'plugin',
    'author' => 'Manuel Munz',
    'author_email' => 't3dev@comuno.net',
    'state' => 'alpha',
    'version' => '2.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '13.4.0-14.3.99',
            'news' => '12.3.0-14.99.99'
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
