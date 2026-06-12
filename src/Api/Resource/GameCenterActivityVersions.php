<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityVersionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityVersionUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions\GameCenterActivityVersionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions\GameCenterActivityVersionsDefaultImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions\GameCenterActivityVersionsDefaultImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions\GameCenterActivityVersionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions\GameCenterActivityVersionsLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions\GameCenterActivityVersionsLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions\GameCenterActivityVersionsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterActivityVersions extends BaseResource
{
    public function gameCenterActivityVersionsCreateInstance(
        GameCenterActivityVersionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivityVersionsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterActivityLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $include
     */
    public function gameCenterActivityVersionsGetInstance(
        string $id,
        ?array $fieldsgameCenterActivityVersions = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterActivityLocalizations = null,
        ?array $fieldsgameCenterActivityImages = null,
        ?array $fieldsgameCenterActivityVersionReleases = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
        ?int $limitreleases = null,
    ): Response {
        return $this->connector->send(new GameCenterActivityVersionsGetInstance($id, $fieldsgameCenterActivityVersions, $fieldsgameCenterActivities, $fieldsgameCenterActivityLocalizations, $fieldsgameCenterActivityImages, $fieldsgameCenterActivityVersionReleases, $include, $limitlocalizations, $limitreleases));
    }

    public function gameCenterActivityVersionsUpdateInstance(
        string $id,
        GameCenterActivityVersionUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivityVersionsUpdateInstance($id, $payload));
    }

    public function gameCenterActivityVersionsDefaultImageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterActivityVersionsDefaultImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     */
    public function gameCenterActivityVersionsDefaultImageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterActivityImages = null,
    ): Response {
        return $this->connector->send(new GameCenterActivityVersionsDefaultImageGetToOneRelated($id, $fieldsgameCenterActivityImages));
    }

    public function gameCenterActivityVersionsLocalizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterActivityVersionsLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterActivityVersionsLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterActivityLocalizations = null,
        ?array $fieldsgameCenterActivityVersions = null,
        ?array $fieldsgameCenterActivityImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterActivityVersionsLocalizationsGetToManyRelated($id, $fieldsgameCenterActivityLocalizations, $fieldsgameCenterActivityVersions, $fieldsgameCenterActivityImages, $limit, $include));
    }
}
