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
     * first name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $middlename;

    /**
     * first name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $lastname;

    /**
     * first name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $formername;

    /**
     * first name of the account
     *
     * @var string
     * @JMS\Type("string")
     */
    private $degree;

    /**
     * @param string $degree
     */
    public function setDegree($degree) {
        $this->degree = $degree;
    }

    /**
     * @return string
     */
    public function getDegree() {
        return $this->degree;
    }

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
     * @param string $formername
     */
    public function setFormername($formername) {
        $this->formername = $formername;
    }

    /**
     * @return string
     */
    public function getFormername() {
        return $this->formername;
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