<?php

defined('TYPO3_MODE') or die();

$tempColumns = Array(
    "single_content_pid" => Array(
        "exclude" => 1,
        "label" => "LLL:EXT:news_singlepage/Resources/Private/Language/locallang_db.xlf:single_content_pid",
        "config" => Array(
            'type' => 'select',
            'foreign_table' => 'pages',
            'size' => 20,
            'renderType' => 'selectTree',
            'treeConfig' => array(
                'expandAll' => true,
                'parentField' => 'pid',
                'appearance' => array(
                    'showHeader' => TRUE,
                    'maxLevels' => 20,
                ),
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns("tx_news_domain_model_news", $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes("tx_news_domain_model_news", "single_content_pid;;;;1-1-1");
