<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAppVersionCompatibilityVersionsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAppVersionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAppVersionUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsAppStoreVersionGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsAppStoreVersionGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsCompatibilityVersionsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsCompatibilityVersionsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsCompatibilityVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsCompatibilityVersionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions\GameCenterAppVersionsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterAppVersions extends BaseResource
{
    public function gameCenterAppVersionsCreateInstance(
        GameCenterAppVersionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAppVersionsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAppVersionsGetInstance(
        string $id,
        ?array $fieldsgameCenterAppVersions = null,
        ?array $fieldsappStoreVersions = null,
        ?array $include = null,
        ?int $limitcompatibilityVersions = null,
    ): Response {
        return $this->connector->send(new GameCenterAppVersionsGetInstance($id, $fieldsgameCenterAppVersions, $fieldsappStoreVersions, $include, $limitcompatibilityVersions));
    }

    public function gameCenterAppVersionsUpdateInstance(
        string $id,
        GameCenterAppVersionUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAppVersionsUpdateInstance($id, $payload));
    }

    public function gameCenterAppVersionsAppStoreVersionGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterAppVersionsAppStoreVersionGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsappStoreVersionPhasedReleases
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsroutingAppCoverages
     * @param  array<int, string>|null  $fieldsappStoreReviewDetails
     * @param  array<int, string>|null  $fieldsappStoreVersionSubmissions
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAppVersionsAppStoreVersionGetToOneRelated(
        string $id,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsapps = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsappStoreVersionPhasedReleases = null,
        ?array $fieldsgameCenterAppVersions = null,
        ?array $fieldsroutingAppCoverages = null,
        ?array $fieldsappStoreReviewDetails = null,
        ?array $fieldsappStoreVersionSubmissions = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsalternativeDistributionPackages = null,
        ?array $include = null,
        ?int $limitappStoreVersionLocalizations = null,
        ?int $limitappStoreVersionExperiments = null,
        ?int $limitappStoreVersionExperimentsV2 = null,
    ): Response {
        return $this->connector->send(new GameCenterAppVersionsAppStoreVersionGetToOneRelated($id, $fieldsappStoreVersions, $fieldsapps, $fieldsappStoreVersionLocalizations, $fieldsbuilds, $fieldsappStoreVersionPhasedReleases, $fieldsgameCenterAppVersions, $fieldsroutingAppCoverages, $fieldsappStoreReviewDetails, $fieldsappStoreVersionSubmissions, $fieldsappClipDefaultExperiences, $fieldsappStoreVersionExperiments, $fieldsalternativeDistributionPackages, $include, $limitappStoreVersionLocalizations, $limitappStoreVersionExperiments, $limitappStoreVersionExperimentsV2));
    }

    public function gameCenterAppVersionsCompatibilityVersionsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterAppVersionsCompatibilityVersionsGetToManyRelationship($id, $limit));
    }

    public function gameCenterAppVersionsCompatibilityVersionsCreateToManyRelationship(
        string $id,
        GameCenterAppVersionCompatibilityVersionsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAppVersionsCompatibilityVersionsCreateToManyRelationship($id, $payload));
    }

    public function gameCenterAppVersionsCompatibilityVersionsDeleteToManyRelationship(
        string $id,
        GameCenterAppVersionCompatibilityVersionsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAppVersionsCompatibilityVersionsDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterenabled
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAppVersionsCompatibilityVersionsGetToManyRelated(
        string $id,
        ?array $filterenabled = null,
        ?array $fieldsgameCenterAppVersions = null,
        ?array $fieldsappStoreVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcompatibilityVersions = null,
    ): Response {
        return $this->connector->send(new GameCenterAppVersionsCompatibilityVersionsGetToManyRelated($id, $filterenabled, $fieldsgameCenterAppVersions, $fieldsappStoreVersions, $limit, $include, $limitcompatibilityVersions));
    }
}
