<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BundleIdCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BundleIdUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsBundleIdCapabilitiesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsBundleIdCapabilitiesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsProfilesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsProfilesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BundleIds\BundleIdsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BundleIds extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filteridentifier
     * @param  array<int, string>|null  $filterseedId
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsprofiles
     * @param  array<int, string>|null  $fieldsbundleIdCapabilities
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function bundleIdsGetCollection(
        ?array $filtername = null,
        ?array $filterplatform = null,
        ?array $filteridentifier = null,
        ?array $filterseedId = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldsbundleIds = null,
        ?array $fieldsprofiles = null,
        ?array $fieldsbundleIdCapabilities = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbundleIdCapabilities = null,
        ?int $limitprofiles = null,
    ): Response {
        return $this->connector->send(new BundleIdsGetCollection($filtername, $filterplatform, $filteridentifier, $filterseedId, $filterid, $sort, $fieldsbundleIds, $fieldsprofiles, $fieldsbundleIdCapabilities, $fieldsapps, $limit, $include, $limitbundleIdCapabilities, $limitprofiles));
    }

    public function bundleIdsCreateInstance(
        BundleIdCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BundleIdsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsprofiles
     * @param  array<int, string>|null  $fieldsbundleIdCapabilities
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function bundleIdsGetInstance(
        string $id,
        ?array $fieldsbundleIds = null,
        ?array $fieldsprofiles = null,
        ?array $fieldsbundleIdCapabilities = null,
        ?array $fieldsapps = null,
        ?array $include = null,
        ?int $limitbundleIdCapabilities = null,
        ?int $limitprofiles = null,
    ): Response {
        return $this->connector->send(new BundleIdsGetInstance($id, $fieldsbundleIds, $fieldsprofiles, $fieldsbundleIdCapabilities, $fieldsapps, $include, $limitbundleIdCapabilities, $limitprofiles));
    }

    public function bundleIdsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BundleIdsDeleteInstance($id));
    }

    public function bundleIdsUpdateInstance(
        string $id,
        BundleIdUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BundleIdsUpdateInstance($id, $payload));
    }

    public function bundleIdsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BundleIdsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function bundleIdsAppGetToOneRelated(string $id, ?array $fieldsapps = null): Response
    {
        return $this->connector->send(new BundleIdsAppGetToOneRelated($id, $fieldsapps));
    }

    public function bundleIdsBundleIdCapabilitiesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BundleIdsBundleIdCapabilitiesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbundleIdCapabilities
     */
    public function bundleIdsBundleIdCapabilitiesGetToManyRelated(
        string $id,
        ?array $fieldsbundleIdCapabilities = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BundleIdsBundleIdCapabilitiesGetToManyRelated($id, $fieldsbundleIdCapabilities, $limit));
    }

    public function bundleIdsProfilesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BundleIdsProfilesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsprofiles
     */
    public function bundleIdsProfilesGetToManyRelated(
        string $id,
        ?array $fieldsprofiles = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BundleIdsProfilesGetToManyRelated($id, $fieldsprofiles, $limit));
    }
}
