<?php
namespace rg\api\base\models\V1;

use JMS\Serializer\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class PublicationAsset {

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $publicationAssetId;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $name;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $url;

    /**
     * @var int
     * @JMS\Type("integer")
     */
    private $size;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $thumbnailUrl;

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $publicationAssetId
     */
    public function setPublicationAssetId($publicationAssetId) {
        $this->publicationAssetId = $publicationAssetId;
    }

    /**
     * @return string
     */
    public function getPublicationAssetId() {
        return $this->publicationAssetId;
    }

    /**
     * @param int $size
     */
    public function setSize($size) {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @param string $thumbnailUrl
     */
    public function setThumbnailUrl($thumbnailUrl) {
        $this->thumbnailUrl = $thumbnailUrl;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl() {
        return $this->thumbnailUrl;
    }

    /**
     * @param string $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }



}