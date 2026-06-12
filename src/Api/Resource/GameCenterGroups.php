<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterAchievementsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterAchievementsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterLeaderboardSetsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterLeaderboardsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupGameCenterLeaderboardsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterAchievementsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterAchievementsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterAchievementsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterAchievementsV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterAchievementsV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterAchievementsV2ReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterActivitiesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterActivitiesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterChallengesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterChallengesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterDetailsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterDetailsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardSetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardSetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardSetsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardSetsV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardSetsV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardSetsV2ReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardsV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardsV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGameCenterLeaderboardsV2ReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups\GameCenterGroupsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterGroups extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filtergameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGetCollection(
        ?array $filtergameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitgameCenterAchievements = null,
        ?int $limitgameCenterAchievementsV2 = null,
        ?int $limitgameCenterActivities = null,
        ?int $limitgameCenterChallenges = null,
        ?int $limitgameCenterDetails = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitgameCenterLeaderboardSetsV2 = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitgameCenterLeaderboardsV2 = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGetCollection($filtergameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterAchievements, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $limit, $include, $limitgameCenterAchievements, $limitgameCenterAchievementsV2, $limitgameCenterActivities, $limitgameCenterChallenges, $limitgameCenterDetails, $limitgameCenterLeaderboardSets, $limitgameCenterLeaderboardSetsV2, $limitgameCenterLeaderboards, $limitgameCenterLeaderboardsV2));
    }

    public function gameCenterGroupsCreateInstance(
        GameCenterGroupCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterGroupsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGetInstance(
        string $id,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $include = null,
        ?int $limitgameCenterAchievements = null,
        ?int $limitgameCenterAchievementsV2 = null,
        ?int $limitgameCenterActivities = null,
        ?int $limitgameCenterChallenges = null,
        ?int $limitgameCenterDetails = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitgameCenterLeaderboardSetsV2 = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitgameCenterLeaderboardsV2 = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGetInstance($id, $fieldsgameCenterGroups, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterAchievements, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $include, $limitgameCenterAchievements, $limitgameCenterAchievementsV2, $limitgameCenterActivities, $limitgameCenterChallenges, $limitgameCenterDetails, $limitgameCenterLeaderboardSets, $limitgameCenterLeaderboardSetsV2, $limitgameCenterLeaderboards, $limitgameCenterLeaderboardsV2));
    }

    public function gameCenterGroupsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterGroupsDeleteInstance($id));
    }

    public function gameCenterGroupsUpdateInstance(
        string $id,
        GameCenterGroupUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterGroupsUpdateInstance($id, $payload));
    }

    public function gameCenterGroupsGameCenterAchievementsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterGroupsGameCenterAchievementsGetToManyRelationship($id, $limit));
    }

    public function gameCenterGroupsGameCenterAchievementsReplaceToManyRelationship(
        string $id,
        GameCenterGroupGameCenterAchievementsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterAchievementsReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGameCenterAchievementsGetToManyRelated(
        string $id,
        ?array $filterreferenceName = null,
        ?array $filterarchived = null,
        ?array $filterid = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $fieldsgameCenterAchievementReleases = null,
        ?array $fieldsgameCenterActivities = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterAchievementsGetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterAchievements, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievementReleases, $fieldsgameCenterActivities, $limit, $include, $limitlocalizations, $limitreleases));
    }

    public function gameCenterGroupsGameCenterAchievementsV2getToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterAchievementsV2GetToManyRelationship($id, $limit));
    }

    public function gameCenterGroupsGameCenterAchievementsV2replaceToManyRelationship(
        string $id,
        GameCenterGroupGameCenterAchievementsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterAchievementsV2ReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGameCenterAchievementsV2getToManyRelated(
        string $id,
        ?array $filterreferenceName = null,
        ?array $filterarchived = null,
        ?array $filterid = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterAchievementVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterAchievementsV2GetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterAchievements, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterActivities, $fieldsgameCenterAchievementVersions, $limit, $include, $limitversions));
    }

    public function gameCenterGroupsGameCenterActivitiesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterGroupsGameCenterActivitiesGetToManyRelationship($id, $limit));
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
    public function gameCenterGroupsGameCenterActivitiesGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterActivityVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitachievements = null,
        ?int $limitachievementsV2 = null,
        ?int $limitleaderboards = null,
        ?int $limitleaderboardsV2 = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterActivitiesGetToManyRelated($id, $fieldsgameCenterActivities, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterAchievements, $fieldsgameCenterLeaderboards, $fieldsgameCenterActivityVersions, $limit, $include, $limitachievements, $limitachievementsV2, $limitleaderboards, $limitleaderboardsV2, $limitversions));
    }

    public function gameCenterGroupsGameCenterChallengesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterGroupsGameCenterChallengesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGameCenterChallengesGetToManyRelated(
        string $id,
        ?array $filterreferenceName = null,
        ?array $filterarchived = null,
        ?array $filterid = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterChallengesGetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterChallenges, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterChallengeVersions, $fieldsgameCenterLeaderboards, $limit, $include, $limitversions));
    }

    public function gameCenterGroupsGameCenterDetailsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterGroupsGameCenterDetailsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filtergameCenterAppVersionsEnabled
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGameCenterDetailsGetToManyRelated(
        string $id,
        ?array $filtergameCenterAppVersionsEnabled = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsapps = null,
        ?array $fieldsgameCenterAppVersions = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $fieldsgameCenterAchievementReleases = null,
        ?array $fieldsgameCenterActivityVersionReleases = null,
        ?array $fieldsgameCenterChallengeVersionReleases = null,
        ?array $fieldsgameCenterLeaderboardReleases = null,
        ?array $fieldsgameCenterLeaderboardSetReleases = null,
        ?array $fieldsappStoreVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitgameCenterAppVersions = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitgameCenterLeaderboardsV2 = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitgameCenterLeaderboardSetsV2 = null,
        ?int $limitgameCenterAchievements = null,
        ?int $limitgameCenterAchievementsV2 = null,
        ?int $limitgameCenterActivities = null,
        ?int $limitgameCenterChallenges = null,
        ?int $limitachievementReleases = null,
        ?int $limitactivityReleases = null,
        ?int $limitchallengeReleases = null,
        ?int $limitleaderboardReleases = null,
        ?int $limitleaderboardSetReleases = null,
        ?int $limitchallengesMinimumPlatformVersions = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterDetailsGetToManyRelated($id, $filtergameCenterAppVersionsEnabled, $fieldsgameCenterDetails, $fieldsapps, $fieldsgameCenterAppVersions, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterAchievements, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $fieldsgameCenterAchievementReleases, $fieldsgameCenterActivityVersionReleases, $fieldsgameCenterChallengeVersionReleases, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterLeaderboardSetReleases, $fieldsappStoreVersions, $limit, $include, $limitgameCenterAppVersions, $limitgameCenterLeaderboards, $limitgameCenterLeaderboardsV2, $limitgameCenterLeaderboardSets, $limitgameCenterLeaderboardSetsV2, $limitgameCenterAchievements, $limitgameCenterAchievementsV2, $limitgameCenterActivities, $limitgameCenterChallenges, $limitachievementReleases, $limitactivityReleases, $limitchallengeReleases, $limitleaderboardReleases, $limitleaderboardSetReleases, $limitchallengesMinimumPlatformVersions));
    }

    public function gameCenterGroupsGameCenterLeaderboardSetsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardSetsGetToManyRelationship($id, $limit));
    }

    public function gameCenterGroupsGameCenterLeaderboardSetsReplaceToManyRelationship(
        string $id,
        GameCenterGroupGameCenterLeaderboardSetsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardSetsReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGameCenterLeaderboardSetsGetToManyRelated(
        string $id,
        ?array $filterreferenceName = null,
        ?array $filterid = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSetReleases = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardSetsGetToManyRelated($id, $filterreferenceName, $filterid, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSetReleases, $limit, $include, $limitlocalizations, $limitgameCenterLeaderboards, $limitreleases));
    }

    public function gameCenterGroupsGameCenterLeaderboardSetsV2getToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardSetsV2GetToManyRelationship($id, $limit));
    }

    public function gameCenterGroupsGameCenterLeaderboardSetsV2replaceToManyRelationship(
        string $id,
        GameCenterGroupGameCenterLeaderboardSetsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardSetsV2ReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGameCenterLeaderboardSetsV2getToManyRelated(
        string $id,
        ?array $filterreferenceName = null,
        ?array $filterid = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSetVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardSetsV2GetToManyRelated($id, $filterreferenceName, $filterid, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSetVersions, $limit, $include, $limitgameCenterLeaderboards, $limitversions));
    }

    public function gameCenterGroupsGameCenterLeaderboardsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardsGetToManyRelationship($id, $limit));
    }

    public function gameCenterGroupsGameCenterLeaderboardsReplaceToManyRelationship(
        string $id,
        GameCenterGroupGameCenterLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardsReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGameCenterLeaderboardsGetToManyRelated(
        string $id,
        ?array $filterreferenceName = null,
        ?array $filterarchived = null,
        ?array $filterid = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $fieldsgameCenterLeaderboardReleases = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardsGetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $limit, $include, $limitgameCenterLeaderboardSets, $limitlocalizations, $limitreleases));
    }

    public function gameCenterGroupsGameCenterLeaderboardsV2getToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardsV2GetToManyRelationship($id, $limit));
    }

    public function gameCenterGroupsGameCenterLeaderboardsV2replaceToManyRelationship(
        string $id,
        GameCenterGroupGameCenterLeaderboardsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardsV2ReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterGroupsGameCenterLeaderboardsV2getToManyRelated(
        string $id,
        ?array $filterreferenceName = null,
        ?array $filterarchived = null,
        ?array $filterid = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $fieldsgameCenterLeaderboardVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterGroupsGameCenterLeaderboardsV2GetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $fieldsgameCenterLeaderboardVersions, $limit, $include, $limitgameCenterLeaderboardSets, $limitversions));
    }
}
