<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailChallengesMinimumPlatformVersionsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailGameCenterAchievementsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailGameCenterAchievementsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailGameCenterLeaderboardSetsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailGameCenterLeaderboardSetsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailGameCenterLeaderboardsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailGameCenterLeaderboardsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsAchievementReleasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsAchievementReleasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsActivityReleasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsActivityReleasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsChallengeReleasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsChallengeReleasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsChallengesMinimumPlatformVersionsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsClassicMatchmakingRequestsGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterAchievementsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterAchievementsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterAchievementsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterAchievementsV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterAchievementsV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterAchievementsV2ReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterActivitiesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterActivitiesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterAppVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterAppVersionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterChallengesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterChallengesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterGroupGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterGroupGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardSetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardSetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardSetsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardSetsV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardSetsV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardSetsV2ReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardsV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardsV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGameCenterLeaderboardsV2ReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsLeaderboardReleasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsLeaderboardReleasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsLeaderboardSetReleasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsLeaderboardSetReleasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsRuleBasedMatchmakingRequestsGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails\GameCenterDetailsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterDetails extends BaseResource
{
    public function gameCenterDetailsCreateInstance(
        GameCenterDetailCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsCreateInstance($payload));
    }

    /**
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
    public function gameCenterDetailsGetInstance(
        string $id,
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
        ?array $include = null,
        ?int $limitachievementReleases = null,
        ?int $limitactivityReleases = null,
        ?int $limitchallengeReleases = null,
        ?int $limitchallengesMinimumPlatformVersions = null,
        ?int $limitgameCenterAchievements = null,
        ?int $limitgameCenterAchievementsV2 = null,
        ?int $limitgameCenterActivities = null,
        ?int $limitgameCenterAppVersions = null,
        ?int $limitgameCenterChallenges = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitgameCenterLeaderboardSetsV2 = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitgameCenterLeaderboardsV2 = null,
        ?int $limitleaderboardReleases = null,
        ?int $limitleaderboardSetReleases = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGetInstance($id, $fieldsgameCenterDetails, $fieldsapps, $fieldsgameCenterAppVersions, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterAchievements, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $fieldsgameCenterAchievementReleases, $fieldsgameCenterActivityVersionReleases, $fieldsgameCenterChallengeVersionReleases, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterLeaderboardSetReleases, $fieldsappStoreVersions, $include, $limitachievementReleases, $limitactivityReleases, $limitchallengeReleases, $limitchallengesMinimumPlatformVersions, $limitgameCenterAchievements, $limitgameCenterAchievementsV2, $limitgameCenterActivities, $limitgameCenterAppVersions, $limitgameCenterChallenges, $limitgameCenterLeaderboardSets, $limitgameCenterLeaderboardSetsV2, $limitgameCenterLeaderboards, $limitgameCenterLeaderboardsV2, $limitleaderboardReleases, $limitleaderboardSetReleases));
    }

    public function gameCenterDetailsUpdateInstance(
        string $id,
        GameCenterDetailUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsUpdateInstance($id, $payload));
    }

    public function gameCenterDetailsAchievementReleasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterDetailsAchievementReleasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterAchievement
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $include
     */
    public function gameCenterDetailsAchievementReleasesGetToManyRelated(
        string $id,
        ?array $filterlive = null,
        ?array $filtergameCenterAchievement = null,
        ?array $fieldsgameCenterAchievementReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterAchievements = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsAchievementReleasesGetToManyRelated($id, $filterlive, $filtergameCenterAchievement, $fieldsgameCenterAchievementReleases, $fieldsgameCenterDetails, $fieldsgameCenterAchievements, $limit, $include));
    }

    public function gameCenterDetailsActivityReleasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterDetailsActivityReleasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterDetailsActivityReleasesGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterActivityVersionReleases = null,
        ?array $fieldsgameCenterActivityVersions = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsActivityReleasesGetToManyRelated($id, $fieldsgameCenterActivityVersionReleases, $fieldsgameCenterActivityVersions, $limit, $include));
    }

    public function gameCenterDetailsChallengeReleasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterDetailsChallengeReleasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterDetailsChallengeReleasesGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterChallengeVersionReleases = null,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsChallengeReleasesGetToManyRelated($id, $fieldsgameCenterChallengeVersionReleases, $fieldsgameCenterChallengeVersions, $limit, $include));
    }

    public function gameCenterDetailsChallengesMinimumPlatformVersionsReplaceToManyRelationship(
        string $id,
        GameCenterDetailChallengesMinimumPlatformVersionsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsChallengesMinimumPlatformVersionsReplaceToManyRelationship($id, $payload));
    }

    public function gameCenterDetailsGameCenterAchievementsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterAchievementsGetToManyRelationship($id, $limit));
    }

    public function gameCenterDetailsGameCenterAchievementsReplaceToManyRelationship(
        string $id,
        GameCenterDetailGameCenterAchievementsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterAchievementsReplaceToManyRelationship($id, $payload));
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
    public function gameCenterDetailsGameCenterAchievementsGetToManyRelated(
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
        return $this->connector->send(new GameCenterDetailsGameCenterAchievementsGetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterAchievements, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievementReleases, $fieldsgameCenterActivities, $limit, $include, $limitlocalizations, $limitreleases));
    }

    public function gameCenterDetailsGameCenterAchievementsV2getToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterAchievementsV2GetToManyRelationship($id, $limit));
    }

    public function gameCenterDetailsGameCenterAchievementsV2replaceToManyRelationship(
        string $id,
        GameCenterDetailGameCenterAchievementsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterAchievementsV2ReplaceToManyRelationship($id, $payload));
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
    public function gameCenterDetailsGameCenterAchievementsV2getToManyRelated(
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
        return $this->connector->send(new GameCenterDetailsGameCenterAchievementsV2GetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterAchievements, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterActivities, $fieldsgameCenterAchievementVersions, $limit, $include, $limitversions));
    }

    public function gameCenterDetailsGameCenterActivitiesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterDetailsGameCenterActivitiesGetToManyRelationship($id, $limit));
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
    public function gameCenterDetailsGameCenterActivitiesGetToManyRelated(
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
        return $this->connector->send(new GameCenterDetailsGameCenterActivitiesGetToManyRelated($id, $fieldsgameCenterActivities, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterAchievements, $fieldsgameCenterLeaderboards, $fieldsgameCenterActivityVersions, $limit, $include, $limitachievements, $limitachievementsV2, $limitleaderboards, $limitleaderboardsV2, $limitversions));
    }

    public function gameCenterDetailsGameCenterAppVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterDetailsGameCenterAppVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterenabled
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterDetailsGameCenterAppVersionsGetToManyRelated(
        string $id,
        ?array $filterenabled = null,
        ?array $fieldsgameCenterAppVersions = null,
        ?array $fieldsappStoreVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcompatibilityVersions = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterAppVersionsGetToManyRelated($id, $filterenabled, $fieldsgameCenterAppVersions, $fieldsappStoreVersions, $limit, $include, $limitcompatibilityVersions));
    }

    public function gameCenterDetailsGameCenterChallengesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterDetailsGameCenterChallengesGetToManyRelationship($id, $limit));
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
    public function gameCenterDetailsGameCenterChallengesGetToManyRelated(
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
        return $this->connector->send(new GameCenterDetailsGameCenterChallengesGetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterChallenges, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterChallengeVersions, $fieldsgameCenterLeaderboards, $limit, $include, $limitversions));
    }

    public function gameCenterDetailsGameCenterGroupGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterDetailsGameCenterGroupGetToOneRelationship($id));
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
    public function gameCenterDetailsGameCenterGroupGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $include = null,
        ?int $limitgameCenterDetails = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitgameCenterLeaderboardsV2 = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitgameCenterLeaderboardSetsV2 = null,
        ?int $limitgameCenterAchievements = null,
        ?int $limitgameCenterAchievementsV2 = null,
        ?int $limitgameCenterActivities = null,
        ?int $limitgameCenterChallenges = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterGroupGetToOneRelated($id, $fieldsgameCenterGroups, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterAchievements, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $include, $limitgameCenterDetails, $limitgameCenterLeaderboards, $limitgameCenterLeaderboardsV2, $limitgameCenterLeaderboardSets, $limitgameCenterLeaderboardSetsV2, $limitgameCenterAchievements, $limitgameCenterAchievementsV2, $limitgameCenterActivities, $limitgameCenterChallenges));
    }

    public function gameCenterDetailsGameCenterLeaderboardSetsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardSetsGetToManyRelationship($id, $limit));
    }

    public function gameCenterDetailsGameCenterLeaderboardSetsReplaceToManyRelationship(
        string $id,
        GameCenterDetailGameCenterLeaderboardSetsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardSetsReplaceToManyRelationship($id, $payload));
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
    public function gameCenterDetailsGameCenterLeaderboardSetsGetToManyRelated(
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
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardSetsGetToManyRelated($id, $filterreferenceName, $filterid, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSetReleases, $limit, $include, $limitlocalizations, $limitgameCenterLeaderboards, $limitreleases));
    }

    public function gameCenterDetailsGameCenterLeaderboardSetsV2getToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardSetsV2GetToManyRelationship($id, $limit));
    }

    public function gameCenterDetailsGameCenterLeaderboardSetsV2replaceToManyRelationship(
        string $id,
        GameCenterDetailGameCenterLeaderboardSetsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardSetsV2ReplaceToManyRelationship($id, $payload));
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
    public function gameCenterDetailsGameCenterLeaderboardSetsV2getToManyRelated(
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
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardSetsV2GetToManyRelated($id, $filterreferenceName, $filterid, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSetVersions, $limit, $include, $limitgameCenterLeaderboards, $limitversions));
    }

    public function gameCenterDetailsGameCenterLeaderboardsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardsGetToManyRelationship($id, $limit));
    }

    public function gameCenterDetailsGameCenterLeaderboardsReplaceToManyRelationship(
        string $id,
        GameCenterDetailGameCenterLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardsReplaceToManyRelationship($id, $payload));
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
    public function gameCenterDetailsGameCenterLeaderboardsGetToManyRelated(
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
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardsGetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $limit, $include, $limitgameCenterLeaderboardSets, $limitlocalizations, $limitreleases));
    }

    public function gameCenterDetailsGameCenterLeaderboardsV2getToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardsV2GetToManyRelationship($id, $limit));
    }

    public function gameCenterDetailsGameCenterLeaderboardsV2replaceToManyRelationship(
        string $id,
        GameCenterDetailGameCenterLeaderboardsV2linkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardsV2ReplaceToManyRelationship($id, $payload));
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
    public function gameCenterDetailsGameCenterLeaderboardsV2getToManyRelated(
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
        return $this->connector->send(new GameCenterDetailsGameCenterLeaderboardsV2GetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $fieldsgameCenterLeaderboardVersions, $limit, $include, $limitgameCenterLeaderboardSets, $limitversions));
    }

    public function gameCenterDetailsLeaderboardReleasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterDetailsLeaderboardReleasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterLeaderboard
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function gameCenterDetailsLeaderboardReleasesGetToManyRelated(
        string $id,
        ?array $filterlive = null,
        ?array $filtergameCenterLeaderboard = null,
        ?array $fieldsgameCenterLeaderboardReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsLeaderboardReleasesGetToManyRelated($id, $filterlive, $filtergameCenterLeaderboard, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboards, $limit, $include));
    }

    public function gameCenterDetailsLeaderboardSetReleasesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsLeaderboardSetReleasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterLeaderboardSet
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $include
     */
    public function gameCenterDetailsLeaderboardSetReleasesGetToManyRelated(
        string $id,
        ?array $filterlive = null,
        ?array $filtergameCenterLeaderboardSet = null,
        ?array $fieldsgameCenterLeaderboardSetReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsLeaderboardSetReleasesGetToManyRelated($id, $filterlive, $filtergameCenterLeaderboardSet, $fieldsgameCenterLeaderboardSetReleases, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboardSets, $limit, $include));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterDetailsClassicMatchmakingRequestsGetMetrics(
        string $id,
        string $granularity,
        ?array $groupBy = null,
        ?string $filterresult = null,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsClassicMatchmakingRequestsGetMetrics($id, $granularity, $groupBy, $filterresult, $sort, $limit));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterDetailsRuleBasedMatchmakingRequestsGetMetrics(
        string $id,
        string $granularity,
        ?array $groupBy = null,
        ?string $filterresult = null,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterDetailsRuleBasedMatchmakingRequestsGetMetrics($id, $granularity, $groupBy, $filterresult, $sort, $limit));
    }
}
