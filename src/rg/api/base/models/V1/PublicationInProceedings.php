<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationInProceedings {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $conference;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $volume;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $location;

    /**
     * @param string $conference
     */
    public function setConference($conference) {
        $this->conference = $conference;
    }

    /**
     * @return string
     */
    public function getConference() {
        return $this->conference;
    }

    /**
     * @param string $location
     */
    public function setLocation($location) {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @param string $volume
     */
    public function setVolume($volume) {
        $this->volume = $volume;
    }

    /**
     * @return string
     */
    public function getVolume() {
        return $this->volume;
    }

} 