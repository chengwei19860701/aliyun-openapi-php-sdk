<?php

namespace live\Request\V20161101;

/**
 * Request of UpdateCasterSceneConfig
 *
 * @method array getComponentIds()
 * @method string getCasterId()
 * @method string getSceneId()
 * @method string getOwnerId()
 * @method string getLayoutId()
 */
class UpdateCasterSceneConfigRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'live',
            '2016-11-01',
            'UpdateCasterSceneConfig',
            'live'
        );
    }

    /**
     * @param array $componentIds
     *
     * @return $this
     */
    public function setComponentIds(array $componentIds)
    {
        $this->requestParameters['ComponentIds'] = $componentIds;
        foreach ($componentIds as $i => $iValue) {
            $this->queryParameters['ComponentId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function setCasterId($casterId)
    {
        $this->requestParameters['CasterId'] = $casterId;
        $this->queryParameters['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $sceneId
     *
     * @return $this
     */
    public function setSceneId($sceneId)
    {
        $this->requestParameters['SceneId'] = $sceneId;
        $this->queryParameters['SceneId'] = $sceneId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $layoutId
     *
     * @return $this
     */
    public function setLayoutId($layoutId)
    {
        $this->requestParameters['LayoutId'] = $layoutId;
        $this->queryParameters['LayoutId'] = $layoutId;

        return $this;
    }
}
