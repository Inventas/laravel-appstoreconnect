<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetLocalizationV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetLocalizationV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsV2ImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsV2ImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations\GameCenterLeaderboardSetLocalizationsV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardSetLocalizations extends BaseResource
{
    public function gameCenterLeaderboardSetLocalizationsCreateInstance(
        GameCenterLeaderboardSetLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetLocalizationsGetInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterLeaderboardSetImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsGetInstance($id, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardSetImages, $include));
    }

    public function gameCenterLeaderboardSetLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsDeleteInstance($id));
    }

    public function gameCenterLeaderboardSetLocalizationsUpdateInstance(
        string $id,
        GameCenterLeaderboardSetLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsUpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardSetLocalizationsV2createInstance(
        GameCenterLeaderboardSetLocalizationV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetLocalizationsV2getInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $fieldsgameCenterLeaderboardSetVersions = null,
        ?array $fieldsgameCenterLeaderboardSetImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsV2GetInstance($id, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboardSetVersions, $fieldsgameCenterLeaderboardSetImages, $include));
    }

    public function gameCenterLeaderboardSetLocalizationsV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsV2DeleteInstance($id));
    }

    public function gameCenterLeaderboardSetLocalizationsV2updateInstance(
        string $id,
        GameCenterLeaderboardSetLocalizationV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsV2UpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImageGetToOneRelationship(
        string $id,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetImages = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImageGetToOneRelated($id, $fieldsgameCenterLeaderboardSetImages, $fieldsgameCenterLeaderboardSetLocalizations, $include));
    }

    public function gameCenterLeaderboardSetLocalizationsV2imageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsV2ImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetLocalizationsV2imageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetImages = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetLocalizationsV2ImageGetToOneRelated($id, $fieldsgameCenterLeaderboardSetImages, $fieldsgameCenterLeaderboardSetLocalizations, $include));
    }
}
