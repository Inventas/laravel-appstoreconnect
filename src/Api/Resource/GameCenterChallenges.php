<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeLeaderboardLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeLeaderboardV2linkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges\GameCenterChallengesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges\GameCenterChallengesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges\GameCenterChallengesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges\GameCenterChallengesLeaderboardUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges\GameCenterChallengesLeaderboardV2UpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges\GameCenterChallengesUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges\GameCenterChallengesVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges\GameCenterChallengesVersionsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterChallenges extends BaseResource
{
    public function gameCenterChallengesCreateInstance(
        GameCenterChallengeCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function gameCenterChallengesGetInstance(
        string $id,
        ?array $fieldsgameCenterChallenges = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $include = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengesGetInstance($id, $fieldsgameCenterChallenges, $fieldsgameCenterDetails, $fieldsgameCenterGroups, $fieldsgameCenterChallengeVersions, $fieldsgameCenterLeaderboards, $include, $limitversions));
    }

    public function gameCenterChallengesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterChallengesDeleteInstance($id));
    }

    public function gameCenterChallengesUpdateInstance(
        string $id,
        GameCenterChallengeUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengesUpdateInstance($id, $payload));
    }

    public function gameCenterChallengesLeaderboardUpdateToOneRelationship(
        string $id,
        GameCenterChallengeLeaderboardLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengesLeaderboardUpdateToOneRelationship($id, $payload));
    }

    public function gameCenterChallengesLeaderboardV2updateToOneRelationship(
        string $id,
        GameCenterChallengeLeaderboardV2linkageRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengesLeaderboardV2UpdateToOneRelationship($id, $payload));
    }

    public function gameCenterChallengesVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterChallengesVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterChallengeLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterChallengesVersionsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $fieldsgameCenterChallengeLocalizations = null,
        ?array $fieldsgameCenterChallengeVersionReleases = null,
        ?array $fieldsgameCenterChallengeImages = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengesVersionsGetToManyRelated($id, $fieldsgameCenterChallengeVersions, $fieldsgameCenterChallenges, $fieldsgameCenterChallengeLocalizations, $fieldsgameCenterChallengeVersionReleases, $fieldsgameCenterChallengeImages, $limit, $include, $limitlocalizations, $limitreleases));
    }
}
