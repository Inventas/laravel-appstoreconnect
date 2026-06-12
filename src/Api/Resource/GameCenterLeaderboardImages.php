<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardImageV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardImageV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages\GameCenterLeaderboardImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages\GameCenterLeaderboardImagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages\GameCenterLeaderboardImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages\GameCenterLeaderboardImagesUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages\GameCenterLeaderboardImagesV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages\GameCenterLeaderboardImagesV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages\GameCenterLeaderboardImagesV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages\GameCenterLeaderboardImagesV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardImages extends BaseResource
{
    public function gameCenterLeaderboardImagesCreateInstance(
        GameCenterLeaderboardImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardImagesGetInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardImages = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardImagesGetInstance($id, $fieldsgameCenterLeaderboardImages, $fieldsgameCenterLeaderboardLocalizations, $include));
    }

    public function gameCenterLeaderboardImagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardImagesDeleteInstance($id));
    }

    public function gameCenterLeaderboardImagesUpdateInstance(
        string $id,
        GameCenterLeaderboardImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardImagesUpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardImagesV2createInstance(
        GameCenterLeaderboardImageV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardImagesV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardImagesV2getInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardImages = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardImagesV2GetInstance($id, $fieldsgameCenterLeaderboardImages, $fieldsgameCenterLeaderboardLocalizations, $include));
    }

    public function gameCenterLeaderboardImagesV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardImagesV2DeleteInstance($id));
    }

    public function gameCenterLeaderboardImagesV2updateInstance(
        string $id,
        GameCenterLeaderboardImageV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardImagesV2UpdateInstance($id, $payload));
    }
}
