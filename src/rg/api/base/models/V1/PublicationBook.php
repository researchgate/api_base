<?php
namespace rg\api\base\models\V1;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationBook {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $publisher;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $editor;

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
     * @param string $editor
     */
    public function setEditor($editor) {
        $this->editor = $editor;
    }

    /**
     * @return string
     */
    public function getEditor() {
        return $this->editor;
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