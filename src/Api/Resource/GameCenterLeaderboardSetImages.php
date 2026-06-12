<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetImageV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetImageV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages\GameCenterLeaderboardSetImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages\GameCenterLeaderboardSetImagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages\GameCenterLeaderboardSetImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages\GameCenterLeaderboardSetImagesUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages\GameCenterLeaderboardSetImagesV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages\GameCenterLeaderboardSetImagesV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages\GameCenterLeaderboardSetImagesV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages\GameCenterLeaderboardSetImagesV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardSetImages extends BaseResource
{
    public function gameCenterLeaderboardSetImagesCreateInstance(
        GameCenterLeaderboardSetImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetImagesGetInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetImages = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetImagesGetInstance($id, $fieldsgameCenterLeaderboardSetImages, $fieldsgameCenterLeaderboardSetLocalizations, $include));
    }

    public function gameCenterLeaderboardSetImagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetImagesDeleteInstance($id));
    }

    public function gameCenterLeaderboardSetImagesUpdateInstance(
        string $id,
        GameCenterLeaderboardSetImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetImagesUpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardSetImagesV2createInstance(
        GameCenterLeaderboardSetImageV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetImagesV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetImagesV2getInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetImages = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetImagesV2GetInstance($id, $fieldsgameCenterLeaderboardSetImages, $fieldsgameCenterLeaderboardSetLocalizations, $include));
    }

    public function gameCenterLeaderboardSetImagesV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetImagesV2DeleteInstance($id));
    }

    public function gameCenterLeaderboardSetImagesV2updateInstance(
        string $id,
        GameCenterLeaderboardSetImageV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetImagesV2UpdateInstance($id, $payload));
    }
}
