<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetMemberLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetMemberLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations\GameCenterLeaderboardSetMemberLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations\GameCenterLeaderboardSetMemberLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations\GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations\GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations\GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSetGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations\GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSetGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations\GameCenterLeaderboardSetMemberLocalizationsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations\GameCenterLeaderboardSetMemberLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardSetMemberLocalizations extends BaseResource
{
    /**
     * @param  array<int, string>  $filtergameCenterLeaderboardSet
     * @param  array<int, string>  $filtergameCenterLeaderboard
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetMemberLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetMemberLocalizationsGetCollection(
        array $filtergameCenterLeaderboardSet,
        array $filtergameCenterLeaderboard,
        ?array $fieldsgameCenterLeaderboardSetMemberLocalizations = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetMemberLocalizationsGetCollection($filtergameCenterLeaderboardSet, $filtergameCenterLeaderboard, $fieldsgameCenterLeaderboardSetMemberLocalizations, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboards, $limit, $include));
    }

    public function gameCenterLeaderboardSetMemberLocalizationsCreateInstance(
        GameCenterLeaderboardSetMemberLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetMemberLocalizationsCreateInstance($payload));
    }

    public function gameCenterLeaderboardSetMemberLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetMemberLocalizationsDeleteInstance($id));
    }

    public function gameCenterLeaderboardSetMemberLocalizationsUpdateInstance(
        string $id,
        GameCenterLeaderboardSetMemberLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetMemberLocalizationsUpdateInstance($id, $payload));
    }

    public function gameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardGetToOneRelationship(
        string $id,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardGetToOneRelationship($id));
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
    public function gameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardGetToOneRelated(
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
        return $this->connector->send(new GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardGetToOneRelated($id, $fieldsgameCenterLeaderboards, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $include, $limitgameCenterLeaderboardSets, $limitlocalizations, $limitreleases));
    }

    public function gameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSetGetToOneRelationship(
        string $id,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSetGetToOneRelationship($id));
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
    public function gameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSetGetToOneRelated(
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
        return $this->connector->send(new GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSetGetToOneRelated($id, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSetReleases, $include, $limitlocalizations, $limitgameCenterLeaderboards, $limitreleases));
    }
}
