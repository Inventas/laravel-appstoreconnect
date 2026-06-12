<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementLocalizationV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementLocalizationV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsGameCenterAchievementGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsGameCenterAchievementGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsGameCenterAchievementImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsGameCenterAchievementImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsV2ImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsV2ImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations\GameCenterAchievementLocalizationsV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterAchievementLocalizations extends BaseResource
{
    public function gameCenterAchievementLocalizationsV2createInstance(
        GameCenterAchievementLocalizationV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementLocalizationsV2getInstance(
        string $id,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $fieldsgameCenterAchievementVersions = null,
        ?array $fieldsgameCenterAchievementImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsV2GetInstance($id, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievementVersions, $fieldsgameCenterAchievementImages, $include));
    }

    public function gameCenterAchievementLocalizationsV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementLocalizationsV2DeleteInstance($id));
    }

    public function gameCenterAchievementLocalizationsV2updateInstance(
        string $id,
        GameCenterAchievementLocalizationV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsV2UpdateInstance($id, $payload));
    }

    public function gameCenterAchievementLocalizationsCreateInstance(
        GameCenterAchievementLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementLocalizationsGetInstance(
        string $id,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterAchievementImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsGetInstance($id, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievements, $fieldsgameCenterAchievementImages, $include));
    }

    public function gameCenterAchievementLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementLocalizationsDeleteInstance($id));
    }

    public function gameCenterAchievementLocalizationsUpdateInstance(
        string $id,
        GameCenterAchievementLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsUpdateInstance($id, $payload));
    }

    public function gameCenterAchievementLocalizationsV2imageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementLocalizationsV2ImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementLocalizationsV2imageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterAchievementImages = null,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsV2ImageGetToOneRelated($id, $fieldsgameCenterAchievementImages, $fieldsgameCenterAchievementLocalizations, $include));
    }

    public function gameCenterAchievementLocalizationsGameCenterAchievementGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementLocalizationsGameCenterAchievementGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementLocalizationsGameCenterAchievementGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $fieldsgameCenterAchievementReleases = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsGameCenterAchievementGetToOneRelated($id, $fieldsgameCenterAchievements, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievementReleases, $fieldsgameCenterActivities, $include, $limitlocalizations, $limitreleases));
    }

    public function gameCenterAchievementLocalizationsGameCenterAchievementImageGetToOneRelationship(
        string $id,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsGameCenterAchievementImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementLocalizationsGameCenterAchievementImageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterAchievementImages = null,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementLocalizationsGameCenterAchievementImageGetToOneRelated($id, $fieldsgameCenterAchievementImages, $fieldsgameCenterAchievementLocalizations, $include));
    }
}
