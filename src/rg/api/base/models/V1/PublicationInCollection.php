<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationInCollection {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $chapter;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $pages;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $bookTitle;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $publisher;

    /**
     * @var string[]|array
     * @JMS\Type("array<string>")
     */
    private $editors;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $edition;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $isbn;

    /**
     * @param string $bookTitle
     */
    public function setBookTitle($bookTitle) {
        $this->bookTitle = $bookTitle;
    }

    /**
     * @return string
     */
    public function getBookTitle() {
        return $this->bookTitle;
    }

    /**
     * @param string $chapter
     */
    public function setChapter($chapter) {
        $this->chapter = $chapter;
    }

    /**
     * @return string
     */
    public function getChapter() {
        return $this->chapter;
    }

    /**
     * @param string $edition
     */
    public function setEdition($edition) {
        $this->edition = $edition;
    }

    /**
     * @return string
     */
    public function getEdition() {
        return $this->edition;
    }

    /**
     * @param array|\string[] $editors
     */
    public function setEditors($editors) {
        $this->editors = $editors;
    }

    /**
     * @return array|\string[]
     */
    public function getEditors() {
        return $this->editors;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getIsbn() {
        return $this->isbn;
    }

    /**
     * @param string $pages
     */
    public function setPages($pages) {
        $this->pages = $pages;
    }

    /**
     * @return string
     */
    public function getPages() {
        return $this->pages;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getPublisher() {
        return $this->publisher;
    }

} 