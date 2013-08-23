<?php
namespace rg\api\base\models\V1;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationPatent {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $referenceNumber;

    /**
     * @param string $referenceNumber
     */
    public function setReferenceNumber($referenceNumber) {
        $this->referenceNumber = $referenceNumber;
    }

    /**
     * @return string
     */
    public function getReferenceNumber() {
        return $this->referenceNumber;
    }

} 