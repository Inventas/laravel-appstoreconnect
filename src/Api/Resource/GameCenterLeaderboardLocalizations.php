<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardLocalizationV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardLocalizationV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsGameCenterLeaderboardImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsGameCenterLeaderboardImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsV2ImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsV2ImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations\GameCenterLeaderboardLocalizationsV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardLocalizations extends BaseResource
{
    public function gameCenterLeaderboardLocalizationsCreateInstance(
        GameCenterLeaderboardLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardLocalizationsGetInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsGetInstance($id, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardImages, $include));
    }

    public function gameCenterLeaderboardLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsDeleteInstance($id));
    }

    public function gameCenterLeaderboardLocalizationsUpdateInstance(
        string $id,
        GameCenterLeaderboardLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsUpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardLocalizationsV2createInstance(
        GameCenterLeaderboardLocalizationV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardLocalizationsV2getInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $fieldsgameCenterLeaderboardVersions = null,
        ?array $fieldsgameCenterLeaderboardImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsV2GetInstance($id, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboardVersions, $fieldsgameCenterLeaderboardImages, $include));
    }

    public function gameCenterLeaderboardLocalizationsV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsV2DeleteInstance($id));
    }

    public function gameCenterLeaderboardLocalizationsV2updateInstance(
        string $id,
        GameCenterLeaderboardLocalizationV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsV2UpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardLocalizationsGameCenterLeaderboardImageGetToOneRelationship(
        string $id,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsGameCenterLeaderboardImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardLocalizationsGameCenterLeaderboardImageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardImages = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsGameCenterLeaderboardImageGetToOneRelated($id, $fieldsgameCenterLeaderboardImages, $fieldsgameCenterLeaderboardLocalizations, $include));
    }

    public function gameCenterLeaderboardLocalizationsV2imageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsV2ImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardLocalizationsV2imageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardImages = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardLocalizationsV2ImageGetToOneRelated($id, $fieldsgameCenterLeaderboardImages, $fieldsgameCenterLeaderboardLocalizations, $include));
    }
}
