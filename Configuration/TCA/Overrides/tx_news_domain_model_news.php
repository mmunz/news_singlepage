<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', [
    'single_content_pid' => [
        'exclude' => true,
        'label' => 'LLL:EXT:news_singlepage/Resources/Private/Language/locallang_db.xlf:single_content_pid',
        'config' => [
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
        ],
    ],
]);
ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'single_content_pid');
