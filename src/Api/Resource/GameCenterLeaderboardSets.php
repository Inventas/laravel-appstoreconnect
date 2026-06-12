<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetGroupLeaderboardSetLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGameCenterLeaderboardsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGameCenterLeaderboardsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGameCenterLeaderboardsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGameCenterLeaderboardsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGameCenterLeaderboardsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGroupLeaderboardSetGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGroupLeaderboardSetGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsGroupLeaderboardSetUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsReleasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsReleasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2GameCenterLeaderboardsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2GameCenterLeaderboardsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2GameCenterLeaderboardsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2GameCenterLeaderboardsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2GameCenterLeaderboardsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2UpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2VersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets\GameCenterLeaderboardSetsV2VersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardSets extends BaseResource
{
    public function gameCenterLeaderboardSetsV2createInstance(
        GameCenterLeaderboardSetV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetsV2getInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSetVersions = null,
        ?array $include = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsV2GetInstance($id, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSetVersions, $include, $limitgameCenterLeaderboards, $limitversions));
    }

    public function gameCenterLeaderboardSetsV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetsV2DeleteInstance($id));
    }

    public function gameCenterLeaderboardSetsV2updateInstance(
        string $id,
        GameCenterLeaderboardSetV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsV2UpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardSetsCreateInstance(
        GameCenterLeaderboardSetCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetsGetInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSetReleases = null,
        ?array $include = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsGetInstance($id, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSetReleases, $include, $limitgameCenterLeaderboards, $limitlocalizations, $limitreleases));
    }

    public function gameCenterLeaderboardSetsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetsDeleteInstance($id));
    }

    public function gameCenterLeaderboardSetsUpdateInstance(
        string $id,
        GameCenterLeaderboardSetUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsUpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardSetsV2gameCenterLeaderboardsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsV2GameCenterLeaderboardsGetToManyRelationship($id, $limit));
    }

    public function gameCenterLeaderboardSetsV2gameCenterLeaderboardsCreateToManyRelationship(
        string $id,
        GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsV2GameCenterLeaderboardsCreateToManyRelationship($id, $payload));
    }

    public function gameCenterLeaderboardSetsV2gameCenterLeaderboardsDeleteToManyRelationship(
        string $id,
        GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsV2GameCenterLeaderboardsDeleteToManyRelationship($id, $payload));
    }

    public function gameCenterLeaderboardSetsV2gameCenterLeaderboardsReplaceToManyRelationship(
        string $id,
        GameCenterLeaderboardSetV2gameCenterLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsV2GameCenterLeaderboardsReplaceToManyRelationship($id, $payload));
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
    public function gameCenterLeaderboardSetsV2gameCenterLeaderboardsGetToManyRelated(
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
        return $this->connector->send(new GameCenterLeaderboardSetsV2GameCenterLeaderboardsGetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $fieldsgameCenterLeaderboardVersions, $limit, $include, $limitgameCenterLeaderboardSets, $limitversions));
    }

    public function gameCenterLeaderboardSetsV2versionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetsV2VersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetsV2versionsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetVersions = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsV2VersionsGetToManyRelated($id, $fieldsgameCenterLeaderboardSetVersions, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardSetLocalizations, $limit, $include, $limitlocalizations));
    }

    public function gameCenterLeaderboardSetsGameCenterLeaderboardsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsGameCenterLeaderboardsGetToManyRelationship($id, $limit));
    }

    public function gameCenterLeaderboardSetsGameCenterLeaderboardsCreateToManyRelationship(
        string $id,
        GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsGameCenterLeaderboardsCreateToManyRelationship($id, $payload));
    }

    public function gameCenterLeaderboardSetsGameCenterLeaderboardsDeleteToManyRelationship(
        string $id,
        GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsGameCenterLeaderboardsDeleteToManyRelationship($id, $payload));
    }

    public function gameCenterLeaderboardSetsGameCenterLeaderboardsReplaceToManyRelationship(
        string $id,
        GameCenterLeaderboardSetGameCenterLeaderboardsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsGameCenterLeaderboardsReplaceToManyRelationship($id, $payload));
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
    public function gameCenterLeaderboardSetsGameCenterLeaderboardsGetToManyRelated(
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
        return $this->connector->send(new GameCenterLeaderboardSetsGameCenterLeaderboardsGetToManyRelated($id, $filterreferenceName, $filterarchived, $filterid, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $limit, $include, $limitgameCenterLeaderboardSets, $limitlocalizations, $limitreleases));
    }

    public function gameCenterLeaderboardSetsGroupLeaderboardSetGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetsGroupLeaderboardSetGetToOneRelationship($id));
    }

    public function gameCenterLeaderboardSetsGroupLeaderboardSetUpdateToOneRelationship(
        string $id,
        GameCenterLeaderboardSetGroupLeaderboardSetLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsGroupLeaderboardSetUpdateToOneRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetsGroupLeaderboardSetGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSetReleases = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsGroupLeaderboardSetGetToOneRelated($id, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSetReleases, $include, $limitlocalizations, $limitgameCenterLeaderboards, $limitreleases));
    }

    public function gameCenterLeaderboardSetsLocalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetsLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetsLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterLeaderboardSetImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsLocalizationsGetToManyRelated($id, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardSetImages, $limit, $include));
    }

    public function gameCenterLeaderboardSetsReleasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetsReleasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterDetail
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetsReleasesGetToManyRelated(
        string $id,
        ?array $filterlive = null,
        ?array $filtergameCenterDetail = null,
        ?array $fieldsgameCenterLeaderboardSetReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetsReleasesGetToManyRelated($id, $filterlive, $filtergameCenterDetail, $fieldsgameCenterLeaderboardSetReleases, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboardSets, $limit, $include));
    }
}
