<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardActivityLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardChallengeLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardGroupLeaderboardLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardV2activityLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardV2challengeLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsActivityUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsChallengeUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsGroupLeaderboardGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsGroupLeaderboardGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsGroupLeaderboardUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsReleasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsReleasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsV2ActivityUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsV2ChallengeUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsV2UpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsV2VersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards\GameCenterLeaderboardsV2VersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboards extends BaseResource
{
    public function gameCenterLeaderboardsCreateInstance(
        GameCenterLeaderboardCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsCreateInstance($payload));
    }

    /**
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
    public function gameCenterLeaderboardsGetInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $fieldsgameCenterLeaderboardReleases = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $include = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsGetInstance($id, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $include, $limitgameCenterLeaderboardSets, $limitlocalizations, $limitreleases));
    }

    public function gameCenterLeaderboardsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardsDeleteInstance($id));
    }

    public function gameCenterLeaderboardsUpdateInstance(
        string $id,
        GameCenterLeaderboardUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsUpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardsV2createInstance(
        GameCenterLeaderboardV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardsV2getInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $fieldsgameCenterLeaderboardVersions = null,
        ?array $include = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsV2GetInstance($id, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $fieldsgameCenterLeaderboardVersions, $include, $limitgameCenterLeaderboardSets, $limitversions));
    }

    public function gameCenterLeaderboardsV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardsV2DeleteInstance($id));
    }

    public function gameCenterLeaderboardsV2updateInstance(
        string $id,
        GameCenterLeaderboardV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsV2UpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardsActivityUpdateToOneRelationship(
        string $id,
        GameCenterLeaderboardActivityLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsActivityUpdateToOneRelationship($id, $payload));
    }

    public function gameCenterLeaderboardsChallengeUpdateToOneRelationship(
        string $id,
        GameCenterLeaderboardChallengeLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsChallengeUpdateToOneRelationship($id, $payload));
    }

    public function gameCenterLeaderboardsGroupLeaderboardGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardsGroupLeaderboardGetToOneRelationship($id));
    }

    public function gameCenterLeaderboardsGroupLeaderboardUpdateToOneRelationship(
        string $id,
        GameCenterLeaderboardGroupLeaderboardLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsGroupLeaderboardUpdateToOneRelationship($id, $payload));
    }

    /**
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
    public function gameCenterLeaderboardsGroupLeaderboardGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $fieldsgameCenterLeaderboardReleases = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $include = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsGroupLeaderboardGetToOneRelated($id, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $include, $limitgameCenterLeaderboardSets, $limitlocalizations, $limitreleases));
    }

    public function gameCenterLeaderboardsLocalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterLeaderboardsLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardsLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsLocalizationsGetToManyRelated($id, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardImages, $limit, $include));
    }

    public function gameCenterLeaderboardsReleasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterLeaderboardsReleasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterDetail
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardsReleasesGetToManyRelated(
        string $id,
        ?array $filterlive = null,
        ?array $filtergameCenterDetail = null,
        ?array $fieldsgameCenterLeaderboardReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsReleasesGetToManyRelated($id, $filterlive, $filtergameCenterDetail, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboards, $limit, $include));
    }

    public function gameCenterLeaderboardsV2activityUpdateToOneRelationship(
        string $id,
        GameCenterLeaderboardV2activityLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsV2ActivityUpdateToOneRelationship($id, $payload));
    }

    public function gameCenterLeaderboardsV2challengeUpdateToOneRelationship(
        string $id,
        GameCenterLeaderboardV2challengeLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsV2ChallengeUpdateToOneRelationship($id, $payload));
    }

    public function gameCenterLeaderboardsV2versionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterLeaderboardsV2VersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardsV2versionsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardVersions = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardsV2VersionsGetToManyRelated($id, $fieldsgameCenterLeaderboardVersions, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardLocalizations, $limit, $include, $limitlocalizations));
    }
}
