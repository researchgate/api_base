<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright Researchgate GmbH
 */
class PublicationTechnicalReport {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $reportNumber;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $affiliation;

    /**
     * @param string $affiliation
     */
    public function setAffiliation($affiliation) {
        $this->affiliation = $affiliation;
    }

    /**
     * @return string
     */
    public function getAffiliation() {
        return $this->affiliation;
    }

    /**
     * @param string $reportNumber
     */
    public function setReportNumber($reportNumber) {
        $this->reportNumber = $reportNumber;
    }

    /**
     * @return string
     */
    public function getReportNumber() {
        return $this->reportNumber;
    }
}
