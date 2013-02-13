<?php
namespace rg\api\base\models\V1;

use JMS\SerializerBundle\Annotation as JMS;

/**
 * @copyright ResearchGate GmbH
 */
class AppData {

    /**
     * id of application
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\ReadOnly
     */
    private $appId;

    /**
     * key where app data is saved
     *
     * @var string
     * @JMS\Type("string")
     */
    private $key;

    /**
     * a json object that is going to be saved into app data, maximum size 512kb
     *
     * @var string
     * @JMS\Type("string")
     */
    private $data;

    /**
     * @param string $key
     */
    public function setKey($key) {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey() {
        return $this->key;
    }

    /**
     * @param mixed $data
     */
    public function setData($data) {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param string $appId
     */
    public function setAppId($appId) {
        $this->appId = $appId;
    }

    /**
     * @return string
     */
    public function getAppId() {
        return $this->appId;
    }
}