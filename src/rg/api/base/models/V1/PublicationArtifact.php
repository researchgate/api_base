<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationArtifact {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $creationTimestamp;

    /**
     * @return string
     */
    public function getCreationTimestamp() {
        return $this->creationTimestamp;
    }

    /**
     * @param string $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp) {
        $this->creationTimestamp = $creationTimestamp;
    }
}
