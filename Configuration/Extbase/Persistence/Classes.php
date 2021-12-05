<?php
declare(strict_types = 1);

return [
    \GeorgRinger\News\Domain\Model\News::class => [
        'tableName' => 'tx_news_domain_model_news',
        'subclasses' => [
            0 => \C1\NewsSinglepage\Domain\Model\NewsDefault::class
        ]
    ],
    \C1\NewsSinglepage\Domain\Model\NewsDefault::class => [
        'tableName' => 'tx_news_domain_model_news',
        'recordType' => 0,
    ],
];
