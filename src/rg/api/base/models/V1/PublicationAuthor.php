<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationAuthor {

    /**
     * @var string|null
     * @JMS\Type("string")
     */
    private $firstName;

    /**
     * @var string|null
     * @JMS\Type("string")
     */
    private $lastName;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $fullName;

    /**
     * @var string|null
     * @JMS\Type("string")
     */
    private $userId;

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getFullName() {
        return $this->fullName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->lastName;
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