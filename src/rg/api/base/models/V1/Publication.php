<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class Publication {

    /**
     * id of the publication
     *
     * @var integer
     * @JMS\Type("integer")
     */
    private $publicationId;

    /**
     * publication title
     *
     * @var string
     * @JMS\Type("string")
     */
    private $title;

    /**
     * publication abstract
     *
     * @var string
     * @JMS\Type("string")
     */
    private $abstract;

    /**
     * date when the publication was originally published
     *
     * @var \DateTime
     * @JMS\Type("DateTime")
     */
    private $publicationDate;

    /**
     * DOI of the publication for citations
     *
     * @var string
     * @JMS\Type("string")
     */
    private $doi;

    /**
     * @var \rg\api\base\models\V1\PublicationAsset[]|array
     * @JMS\Type("array<rg\api\base\models\V1\PublicationAsset>")
     */
    private $assets;

    /**
     * @param int $publicationUid
     */
    public function setPublicationId($publicationUid) {
        $this->publicationId = $publicationUid;
    }

    /**
     * @return int
     */
    public function getPublicationId() {
        return $this->publicationId;
    }

    /**
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param string $abstract
     */
    public function setAbstract($abstract) {
        $this->abstract = $abstract;
    }

    /**
     * @return string
     */
    public function getAbstract() {
        return $this->abstract;
    }

    /**
     * @param string $doi
     */
    public function setDoi($doi) {
        $this->doi = $doi;
    }

    /**
     * @return string
     */
    public function getDoi() {
        return $this->doi;
    }

    /**
     * @param \DateTime $publicationDate
     */
    public function setPublicationDate($publicationDate) {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @return \DateTime
     */
    public function getPublicationDate() {
        return $this->publicationDate;
    }

    /**
     * @param array|\rg\api\base\models\V1\PublicationAsset[] $assets
     */
    public function setAssets($assets) {
        $this->assets = $assets;
    }

    /**
     * @return array|\rg\api\base\models\V1\PublicationAsset[]
     */
    public function getAssets() {
        return $this->assets;
    }

}