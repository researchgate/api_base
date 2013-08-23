<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationThesis {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $superVisor;

    /**
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
     * @param string $superVisor
     */
    public function setSuperVisor($superVisor) {
        $this->superVisor = $superVisor;
    }

    /**
     * @return string
     */
    public function getSuperVisor() {
        return $this->superVisor;
    }

} 