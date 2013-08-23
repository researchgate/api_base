<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationArticle {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $issn;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $journal;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $volume;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $issue;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $page;

    /**
     * @param string $issn
     */
    public function setIssn($issn) {
        $this->issn = $issn;
    }

    /**
     * @return string
     */
    public function getIssn() {
        return $this->issn;
    }

    /**
     * @param string $issue
     */
    public function setIssue($issue) {
        $this->issue = $issue;
    }

    /**
     * @return string
     */
    public function getIssue() {
        return $this->issue;
    }

    /**
     * @param string $journal
     */
    public function setJournal($journal) {
        $this->journal = $journal;
    }

    /**
     * @return string
     */
    public function getJournal() {
        return $this->journal;
    }

    /**
     * @param string $page
     */
    public function setPage($page) {
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * @param string $volume
     */
    public function setVolume($volume) {
        $this->volume = $volume;
    }

    /**
     * @return string
     */
    public function getVolume() {
        return $this->volume;
    }
} 