<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationAuthor {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $authorFullname;

    /**
     * @var string|null
     * @JMS\Type("string")
     */
    private $userId;

    /**
     * @param string $authorFullname
     */
    public function setAuthorFullname($authorFullname) {
        $this->authorFullname = $authorFullname;
    }

    /**
     * @return string
     */
    public function getAuthorFullname() {
        return $this->authorFullname;
    }

    /**
     * @param null|string $userId
     */
    public function setUserId($userId) {
        $this->userId = $userId;
    }

    /**
     * @return null|string
     */
    public function getUserId() {
        return $this->userId;
    }
}