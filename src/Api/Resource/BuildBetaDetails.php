<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BuildBetaDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails\BuildBetaDetailsBuildGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails\BuildBetaDetailsBuildGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails\BuildBetaDetailsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails\BuildBetaDetailsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails\BuildBetaDetailsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BuildBetaDetails extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterbuild
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsbuildBetaDetails
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function buildBetaDetailsGetCollection(
        ?array $filterbuild = null,
        ?array $filterid = null,
        ?array $fieldsbuildBetaDetails = null,
        ?array $fieldsbuilds = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BuildBetaDetailsGetCollection($filterbuild, $filterid, $fieldsbuildBetaDetails, $fieldsbuilds, $limit, $include));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildBetaDetails
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function buildBetaDetailsGetInstance(
        string $id,
        ?array $fieldsbuildBetaDetails = null,
        ?array $fieldsbuilds = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BuildBetaDetailsGetInstance($id, $fieldsbuildBetaDetails, $fieldsbuilds, $include));
    }

    public function buildBetaDetailsUpdateInstance(
        string $id,
        BuildBetaDetailUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BuildBetaDetailsUpdateInstance($id, $payload));
    }

    public function buildBetaDetailsBuildGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildBetaDetailsBuildGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuildBetaDetails
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsbuildIcons
     * @param  array<int, string>|null  $fieldsbuildBundles
     * @param  array<int, string>|null  $fieldsbuildUploads
     * @param  array<int, string>|null  $include
     */
    public function buildBetaDetailsBuildGetToOneRelated(
        string $id,
        ?array $fieldsbuilds = null,
        ?array $fieldspreReleaseVersions = null,
        ?array $fieldsbetaTesters = null,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsbetaBuildLocalizations = null,
        ?array $fieldsappEncryptionDeclarations = null,
        ?array $fieldsbetaAppReviewSubmissions = null,
        ?array $fieldsapps = null,
        ?array $fieldsbuildBetaDetails = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsbuildIcons = null,
        ?array $fieldsbuildBundles = null,
        ?array $fieldsbuildUploads = null,
        ?array $include = null,
        ?int $limitindividualTesters = null,
        ?int $limitbetaGroups = null,
        ?int $limitbetaBuildLocalizations = null,
        ?int $limiticons = null,
        ?int $limitbuildBundles = null,
    ): Response {
        return $this->connector->send(new BuildBetaDetailsBuildGetToOneRelated($id, $fieldsbuilds, $fieldspreReleaseVersions, $fieldsbetaTesters, $fieldsbetaGroups, $fieldsbetaBuildLocalizations, $fieldsappEncryptionDeclarations, $fieldsbetaAppReviewSubmissions, $fieldsapps, $fieldsbuildBetaDetails, $fieldsappStoreVersions, $fieldsbuildIcons, $fieldsbuildBundles, $fieldsbuildUploads, $include, $limitindividualTesters, $limitbetaGroups, $limitbetaBuildLocalizations, $limiticons, $limitbuildBundles));
    }
}
