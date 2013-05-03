<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class Publication {

    /**
     * id of the publication
     *
     * @var integer
     * @JMS\Type("integer")
     */
    private $publicationUid;

    /**
     * publication title
     *
     * @var string
     * @JMS\Type("string")
     */
    private $title;

    /**
     * @param int $publicationUid
     */
    public function setPublicationUid($publicationUid) {
        $this->publicationUid = $publicationUid;
    }

    /**
     * @return int
     */
    public function getPublicationUid() {
        return $this->publicationUid;
    }

    /**
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
}