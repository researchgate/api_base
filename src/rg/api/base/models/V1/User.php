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
    private $firstname;

    /**
     * middle name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $middlename;

    /**
     * last name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $lastname;

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * @param string $middlename
     */
    public function setMiddlename($middlename) {
        $this->middlename = $middlename;
    }

    /**
     * @return string
     */
    public function getMiddlename() {
        return $this->middlename;
    }

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


}