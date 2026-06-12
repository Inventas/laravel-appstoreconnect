<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeVersionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions\GameCenterChallengeVersionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions\GameCenterChallengeVersionsDefaultImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions\GameCenterChallengeVersionsDefaultImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions\GameCenterChallengeVersionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions\GameCenterChallengeVersionsLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions\GameCenterChallengeVersionsLocalizationsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterChallengeVersions extends BaseResource
{
    public function gameCenterChallengeVersionsCreateInstance(
        GameCenterChallengeVersionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengeVersionsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterChallengeLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterChallengeVersionsGetInstance(
        string $id,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $fieldsgameCenterChallengeLocalizations = null,
        ?array $fieldsgameCenterChallengeVersionReleases = null,
        ?array $fieldsgameCenterChallengeImages = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengeVersionsGetInstance($id, $fieldsgameCenterChallengeVersions, $fieldsgameCenterChallenges, $fieldsgameCenterChallengeLocalizations, $fieldsgameCenterChallengeVersionReleases, $fieldsgameCenterChallengeImages, $include, $limitlocalizations, $limitreleases));
    }

    public function gameCenterChallengeVersionsDefaultImageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterChallengeVersionsDefaultImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     */
    public function gameCenterChallengeVersionsDefaultImageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterChallengeImages = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengeVersionsDefaultImageGetToOneRelated($id, $fieldsgameCenterChallengeImages));
    }

    public function gameCenterChallengeVersionsLocalizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengeVersionsLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterChallengeVersionsLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterChallengeLocalizations = null,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?array $fieldsgameCenterChallengeImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengeVersionsLocalizationsGetToManyRelated($id, $fieldsgameCenterChallengeLocalizations, $fieldsgameCenterChallengeVersions, $fieldsgameCenterChallengeImages, $limit, $include));
    }
}
