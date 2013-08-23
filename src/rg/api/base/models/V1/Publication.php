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
     * @var string
     * @JMS\Type("string")
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
     * type of the publication
     *
     * one of 'article', 'book', 'inCollection', 'inProceedings',
     * 'thesis', 'patent', 'dataset'
     *
     * @var string
     * @JMS\Type("string")
     */
    private $publicationType;

    /**
     * @var \rg\api\base\models\V1\PublicationAuthor[]|array
     * @JMS\Type("array<rg\api\base\models\V1\PublicationAuthor>")
     */
    private $authors;

    /**
     * @var \rg\api\base\models\V1\PublicationArticle|null
     * @JMS\Type("rg\api\base\models\V1\PublicationArticle")
     */
    private $article;

    /**
     * @var \rg\api\base\models\V1\PublicationBook|null
     * @JMS\Type("rg\api\base\models\V1\PublicationBook")
     */
    private $book;

    /**
     * @var \rg\api\base\models\V1\PublicationDataset|null
     * @JMS\Type("rg\api\base\models\V1\PublicationDataset")
     */
    private $dataset;

    /**
     * @var \rg\api\base\models\V1\PublicationInCollection|null
     * @JMS\Type("rg\api\base\models\V1\PublicationInCollection")
     */
    private $inCollection;

    /**
     * @var \rg\api\base\models\V1\PublicationInProceedings|null
     * @JMS\Type("rg\api\base\models\V1\PublicationInProceedings")
     */
    private $inProceedings;

    /**
     * @var \rg\api\base\models\V1\PublicationPatent|null
     * @JMS\Type("rg\api\base\models\V1\PublicationPatent")
     */
    private $patent;

    /**
     * @var \rg\api\base\models\V1\PublicationThesis|null
     * @JMS\Type("rg\api\base\models\V1\PublicationThesis")
     */
    private $thesis;

    /**
     * @param string $publicationUid
     */
    public function setPublicationId($publicationUid) {
        $this->publicationId = $publicationUid;
    }

    /**
     * @return string
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

    /**
     * @param string $publicationType
     */
    public function setPublicationType($publicationType) {
        $this->publicationType = $publicationType;
    }

    /**
     * @return string
     */
    public function getPublicationType() {
        return $this->publicationType;
    }

    /**
     * @param array|\rg\api\base\models\V1\PublicationAuthor[] $authors
     */
    public function setAuthors($authors) {
        $this->authors = $authors;
    }

    /**
     * @return array|\rg\api\base\models\V1\PublicationAuthor[]
     */
    public function getAuthors() {
        return $this->authors;
    }

    /**
     * @param null|\rg\api\base\models\V1\PublicationArticle $article
     */
    public function setArticle($article) {
        $this->article = $article;
    }

    /**
     * @return null|\rg\api\base\models\V1\PublicationArticle
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * @param null|\rg\api\base\models\V1\PublicationBook $book
     */
    public function setBook($book) {
        $this->book = $book;
    }

    /**
     * @return null|\rg\api\base\models\V1\PublicationBook
     */
    public function getBook() {
        return $this->book;
    }

    /**
     * @param null|\rg\api\base\models\V1\PublicationDataset $dataset
     */
    public function setDataset($dataset) {
        $this->dataset = $dataset;
    }

    /**
     * @return null|\rg\api\base\models\V1\PublicationDataset
     */
    public function getDataset() {
        return $this->dataset;
    }

    /**
     * @param null|\rg\api\base\models\V1\PublicationInCollection $inCollection
     */
    public function setInCollection($inCollection) {
        $this->inCollection = $inCollection;
    }

    /**
     * @return null|\rg\api\base\models\V1\PublicationInCollection
     */
    public function getInCollection() {
        return $this->inCollection;
    }

    /**
     * @param null|\rg\api\base\models\V1\PublicationInProceedings $inProceedings
     */
    public function setInProceedings($inProceedings) {
        $this->inProceedings = $inProceedings;
    }

    /**
     * @return null|\rg\api\base\models\V1\PublicationInProceedings
     */
    public function getInProceedings() {
        return $this->inProceedings;
    }

    /**
     * @param null|\rg\api\base\models\V1\PublicationPatent $patent
     */
    public function setPatent($patent) {
        $this->patent = $patent;
    }

    /**
     * @return null|\rg\api\base\models\V1\PublicationPatent
     */
    public function getPatent() {
        return $this->patent;
    }

    /**
     * @param null|\rg\api\base\models\V1\PublicationThesis $thesis
     */
    public function setThesis($thesis) {
        $this->thesis = $thesis;
    }

    /**
     * @return null|\rg\api\base\models\V1\PublicationThesis
     */
    public function getThesis() {
        return $this->thesis;
    }


}