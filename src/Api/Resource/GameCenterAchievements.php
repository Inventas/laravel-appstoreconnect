<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementActivityLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementGroupAchievementLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementV2activityLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsActivityUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsGroupAchievementGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsGroupAchievementGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsGroupAchievementUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsReleasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsReleasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsV2ActivityUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsV2UpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsV2VersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements\GameCenterAchievementsV2VersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterAchievements extends BaseResource
{
    public function gameCenterAchievementsV2createInstance(
        GameCenterAchievementV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementsV2getInstance(
        string $id,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterAchievementVersions = null,
        ?array $include = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsV2GetInstance($id, $fieldsgameCenterAchievements, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterActivities, $fieldsgameCenterAchievementVersions, $include, $limitversions));
    }

    public function gameCenterAchievementsV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementsV2DeleteInstance($id));
    }

    public function gameCenterAchievementsV2updateInstance(
        string $id,
        GameCenterAchievementV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsV2UpdateInstance($id, $payload));
    }

    public function gameCenterAchievementsCreateInstance(
        GameCenterAchievementCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsCreateInstance($payload));
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
    public function gameCenterAchievementsGetInstance(
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
        return $this->connector->send(new GameCenterAchievementsGetInstance($id, $fieldsgameCenterAchievements, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievementReleases, $fieldsgameCenterActivities, $include, $limitlocalizations, $limitreleases));
    }

    public function gameCenterAchievementsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementsDeleteInstance($id));
    }

    public function gameCenterAchievementsUpdateInstance(
        string $id,
        GameCenterAchievementUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsUpdateInstance($id, $payload));
    }

    public function gameCenterAchievementsV2activityUpdateToOneRelationship(
        string $id,
        GameCenterAchievementV2activityLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsV2ActivityUpdateToOneRelationship($id, $payload));
    }

    public function gameCenterAchievementsV2versionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterAchievementsV2VersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementsV2versionsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterAchievementVersions = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsV2VersionsGetToManyRelated($id, $fieldsgameCenterAchievementVersions, $fieldsgameCenterAchievements, $fieldsgameCenterAchievementLocalizations, $limit, $include, $limitlocalizations));
    }

    public function gameCenterAchievementsActivityUpdateToOneRelationship(
        string $id,
        GameCenterAchievementActivityLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsActivityUpdateToOneRelationship($id, $payload));
    }

    public function gameCenterAchievementsGroupAchievementGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementsGroupAchievementGetToOneRelationship($id));
    }

    public function gameCenterAchievementsGroupAchievementUpdateToOneRelationship(
        string $id,
        GameCenterAchievementGroupAchievementLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsGroupAchievementUpdateToOneRelationship($id, $payload));
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
    public function gameCenterAchievementsGroupAchievementGetToOneRelated(
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
        return $this->connector->send(new GameCenterAchievementsGroupAchievementGetToOneRelated($id, $fieldsgameCenterAchievements, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievementReleases, $fieldsgameCenterActivities, $include, $limitlocalizations, $limitreleases));
    }

    public function gameCenterAchievementsLocalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterAchievementsLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementsLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterAchievementImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsLocalizationsGetToManyRelated($id, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievements, $fieldsgameCenterAchievementImages, $limit, $include));
    }

    public function gameCenterAchievementsReleasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterAchievementsReleasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterDetail
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementsReleasesGetToManyRelated(
        string $id,
        ?array $filterlive = null,
        ?array $filtergameCenterDetail = null,
        ?array $fieldsgameCenterAchievementReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterAchievements = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementsReleasesGetToManyRelated($id, $filterlive, $filtergameCenterDetail, $fieldsgameCenterAchievementReleases, $fieldsgameCenterDetails, $fieldsgameCenterAchievements, $limit, $include));
    }
}
