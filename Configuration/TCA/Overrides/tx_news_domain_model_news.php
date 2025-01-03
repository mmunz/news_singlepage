<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function () {
    $tempColumns = array(
        "single_content_pid" => array(
            "exclude" => 1,
            "label" => "LLL:EXT:news_singlepage/Resources/Private/Language/locallang_db.xlf:single_content_pid",
            'config' => array(
                'type' => 'group',
                'allowed' => 'pages',
                'size' => '1',
                'maxitems' => '1',
                'minitems' => '0',
                'show_thumbs' => '1',
                'wizards' => array(
                    'suggest' => array(
                        'type' => 'suggest'
                    )
                ),
                'default' => 0
            )
        ),
    );

    ExtensionManagementUtility::addTCAcolumns("tx_news_domain_model_news", $tempColumns, 1);
    ExtensionManagementUtility::addToAllTCAtypes("tx_news_domain_model_news", "single_content_pid;;;;1-1-1");

});
