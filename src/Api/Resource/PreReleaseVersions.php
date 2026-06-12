<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions\PreReleaseVersionsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions\PreReleaseVersionsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions\PreReleaseVersionsBuildsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions\PreReleaseVersionsBuildsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions\PreReleaseVersionsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions\PreReleaseVersionsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PreReleaseVersions extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterbuildsBuildAudienceType
     * @param  array<int, string>|null  $filterbuildsExpired
     * @param  array<int, string>|null  $filterbuildsProcessingState
     * @param  array<int, string>|null  $filterbuildsVersion
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterversion
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function preReleaseVersionsGetCollection(
        ?array $filterbuildsBuildAudienceType = null,
        ?array $filterbuildsExpired = null,
        ?array $filterbuildsProcessingState = null,
        ?array $filterbuildsVersion = null,
        ?array $filterplatform = null,
        ?array $filterversion = null,
        ?array $filterapp = null,
        ?array $filterbuilds = null,
        ?array $sort = null,
        ?array $fieldspreReleaseVersions = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new PreReleaseVersionsGetCollection($filterbuildsBuildAudienceType, $filterbuildsExpired, $filterbuildsProcessingState, $filterbuildsVersion, $filterplatform, $filterversion, $filterapp, $filterbuilds, $sort, $fieldspreReleaseVersions, $fieldsbuilds, $fieldsapps, $limit, $include, $limitbuilds));
    }

    /**
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function preReleaseVersionsGetInstance(
        string $id,
        ?array $fieldspreReleaseVersions = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsapps = null,
        ?array $include = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new PreReleaseVersionsGetInstance($id, $fieldspreReleaseVersions, $fieldsbuilds, $fieldsapps, $include, $limitbuilds));
    }

    public function preReleaseVersionsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new PreReleaseVersionsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function preReleaseVersionsAppGetToOneRelated(string $id, ?array $fieldsapps = null): Response
    {
        return $this->connector->send(new PreReleaseVersionsAppGetToOneRelated($id, $fieldsapps));
    }

    public function preReleaseVersionsBuildsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new PreReleaseVersionsBuildsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function preReleaseVersionsBuildsGetToManyRelated(
        string $id,
        ?array $fieldsbuilds = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new PreReleaseVersionsBuildsGetToManyRelated($id, $fieldsbuilds, $limit));
    }
}
