<?php

namespace C1\NewsSinglepage\Domain\Model;

class NewsDefault extends \GeorgRinger\News\Domain\Model\News {

    /**
     * the single content pid
     * @var int
     */
    protected $singleContentPid;

    /**
     * Returns an array of orderings created from a given demand object.
     *
     * @param string $singleContentPid
     * @return void
     */
    public function setSingleContentPid($singleContentPid) {
        $this->singleContentPid = $singleContentPid;
    }

    /**
     * Get new field
     *
     * @return string
     */
    public function getSingleContentPid() {
        return $this->singleContentPid;
    }
}
?>
