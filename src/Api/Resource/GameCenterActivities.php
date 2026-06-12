<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityAchievementsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityAchievementsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityLeaderboardsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityLeaderboardsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesAchievementsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesAchievementsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesAchievementsV2CreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesAchievementsV2DeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesLeaderboardsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesLeaderboardsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesLeaderboardsV2CreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesLeaderboardsV2DeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities\GameCenterActivitiesVersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterActivities extends BaseResource
{
    public function gameCenterActivitiesCreateInstance(
        GameCenterActivityCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterActivitiesGetInstance(
        string $id,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterActivityVersions = null,
        ?array $include = null,
        ?int $limitachievements = null,
        ?int $limitachievementsV2 = null,
        ?int $limitleaderboards = null,
        ?int $limitleaderboardsV2 = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesGetInstance($id, $fieldsgameCenterActivities, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterAchievements, $fieldsgameCenterLeaderboards, $fieldsgameCenterActivityVersions, $include, $limitachievements, $limitachievementsV2, $limitleaderboards, $limitleaderboardsV2, $limitversions));
    }

    public function gameCenterActivitiesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterActivitiesDeleteInstance($id));
    }

    public function gameCenterActivitiesUpdateInstance(
        string $id,
        GameCenterActivityUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesUpdateInstance($id, $payload));
    }

    public function gameCenterActivitiesAchievementsCreateToManyRelationship(
        string $id,
        GameCenterActivityAchievementsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesAchievementsCreateToManyRelationship($id, $payload));
    }

    public function gameCenterActivitiesAchievementsDeleteToManyRelationship(
        string $id,
        GameCenterActivityAchievementsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesAchievementsDeleteToManyRelationship($id, $payload));
    }

    public function gameCenterActivitiesAchievementsV2createToManyRelationship(
        string $id,
        GameCenterActivityAchievementsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesAchievementsV2CreateToManyRelationship($id, $payload));
    }

    public function gameCenterActivitiesAchievementsV2deleteToManyRelationship(
        string $id,
        GameCenterActivityAchievementsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesAchievementsV2DeleteToManyRelationship($id, $payload));
    }

    public function gameCenterActivitiesLeaderboardsCreateToManyRelationship(
        string $id,
        GameCenterActivityLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesLeaderboardsCreateToManyRelationship($id, $payload));
    }

    public function gameCenterActivitiesLeaderboardsDeleteToManyRelationship(
        string $id,
        GameCenterActivityLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesLeaderboardsDeleteToManyRelationship($id, $payload));
    }

    public function gameCenterActivitiesLeaderboardsV2createToManyRelationship(
        string $id,
        GameCenterActivityLeaderboardsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesLeaderboardsV2CreateToManyRelationship($id, $payload));
    }

    public function gameCenterActivitiesLeaderboardsV2deleteToManyRelationship(
        string $id,
        GameCenterActivityLeaderboardsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesLeaderboardsV2DeleteToManyRelationship($id, $payload));
    }

    public function gameCenterActivitiesVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterActivitiesVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterActivityLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $include
     */
    public function gameCenterActivitiesVersionsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterActivityVersions = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterActivityLocalizations = null,
        ?array $fieldsgameCenterActivityImages = null,
        ?array $fieldsgameCenterActivityVersionReleases = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterActivitiesVersionsGetToManyRelated($id, $fieldsgameCenterActivityVersions, $fieldsgameCenterActivities, $fieldsgameCenterActivityLocalizations, $fieldsgameCenterActivityImages, $fieldsgameCenterActivityVersionReleases, $limit, $include, $limitlocalizations, $limitreleases));
    }
}
