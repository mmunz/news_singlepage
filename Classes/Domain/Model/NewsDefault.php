<?php

namespace C1\NewsSinglepage\Domain\Model;

use GeorgRinger\News\Domain\Model\News;

class NewsDefault extends News {
    protected int $singleContentPid = 0;

    public function setSingleContentPid(int $singleContentPid): void
    {
        $this->singleContentPid = $singleContentPid;
    }

    public function getSingleContentPid(): int {
        return $this->singleContentPid;
    }
}
