<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class User {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $userId;

    /**
     * first name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $firstName;

    /**
     * middle name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $middleName;

    /**
     * last name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $lastName;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $profileImageUrl;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $professionalInstitution;

    /**
     * @param string $userId
     */
    public function setUserId($userId) {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getUserId() {
        return $this->userId;
    }

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
     * @param string $lastName
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName($middleName) {
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getMiddleName() {
        return $this->middleName;
    }

    /**
     * @param string $url
     */
    public function setProfileImageUrl($url) {
        $this->profileImageUrl = $url;
    }

    /**
     * @return string
     */
    public function getProfileImageUrl() {
        return $this->profileImageUrl;
    }

    /**
     * @param string $professionalInstitution
     */
    public function setProfessionalInstitution($professionalInstitution) {
        $this->professionalInstitution = $professionalInstitution;
    }

    /**
     * @return string
     */
    public function getProfessionalInstitution() {
        return $this->professionalInstitution;
    }
}
