<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementImageV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementImageV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages\GameCenterAchievementImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages\GameCenterAchievementImagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages\GameCenterAchievementImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages\GameCenterAchievementImagesUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages\GameCenterAchievementImagesV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages\GameCenterAchievementImagesV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages\GameCenterAchievementImagesV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages\GameCenterAchievementImagesV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterAchievementImages extends BaseResource
{
    public function gameCenterAchievementImagesCreateInstance(
        GameCenterAchievementImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementImagesGetInstance(
        string $id,
        ?array $fieldsgameCenterAchievementImages = null,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementImagesGetInstance($id, $fieldsgameCenterAchievementImages, $fieldsgameCenterAchievementLocalizations, $include));
    }

    public function gameCenterAchievementImagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementImagesDeleteInstance($id));
    }

    public function gameCenterAchievementImagesUpdateInstance(
        string $id,
        GameCenterAchievementImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementImagesUpdateInstance($id, $payload));
    }

    public function gameCenterAchievementImagesV2createInstance(
        GameCenterAchievementImageV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementImagesV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementImagesV2getInstance(
        string $id,
        ?array $fieldsgameCenterAchievementImages = null,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementImagesV2GetInstance($id, $fieldsgameCenterAchievementImages, $fieldsgameCenterAchievementLocalizations, $include));
    }

    public function gameCenterAchievementImagesV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementImagesV2DeleteInstance($id));
    }

    public function gameCenterAchievementImagesV2updateInstance(
        string $id,
        GameCenterAchievementImageV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementImagesV2UpdateInstance($id, $payload));
    }
}
