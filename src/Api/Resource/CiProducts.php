<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsAdditionalRepositoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsAdditionalRepositoriesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsBuildRunsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsBuildRunsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsPrimaryRepositoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsPrimaryRepositoriesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsWorkflowsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\CiProducts\CiProductsWorkflowsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CiProducts extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterproductType
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function ciProductsGetCollection(
        ?array $filterproductType = null,
        ?array $filterapp = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsapps = null,
        ?array $fieldsbundleIds = null,
        ?array $fieldsscmRepositories = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitprimaryRepositories = null,
    ): Response {
        return $this->connector->send(new CiProductsGetCollection($filterproductType, $filterapp, $fieldsciProducts, $fieldsapps, $fieldsbundleIds, $fieldsscmRepositories, $limit, $include, $limitprimaryRepositories));
    }

    /**
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function ciProductsGetInstance(
        string $id,
        ?array $fieldsciProducts = null,
        ?array $fieldsapps = null,
        ?array $fieldsbundleIds = null,
        ?array $fieldsscmRepositories = null,
        ?array $include = null,
        ?int $limitprimaryRepositories = null,
    ): Response {
        return $this->connector->send(new CiProductsGetInstance($id, $fieldsciProducts, $fieldsapps, $fieldsbundleIds, $fieldsscmRepositories, $include, $limitprimaryRepositories));
    }

    public function ciProductsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new CiProductsDeleteInstance($id));
    }

    public function ciProductsAdditionalRepositoriesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiProductsAdditionalRepositoriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsscmProviders
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $include
     */
    public function ciProductsAdditionalRepositoriesGetToManyRelated(
        string $id,
        ?array $filterid = null,
        ?array $fieldsscmRepositories = null,
        ?array $fieldsscmProviders = null,
        ?array $fieldsscmGitReferences = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CiProductsAdditionalRepositoriesGetToManyRelated($id, $filterid, $fieldsscmRepositories, $fieldsscmProviders, $fieldsscmGitReferences, $limit, $include));
    }

    public function ciProductsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new CiProductsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsbuildIcons
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsendUserLicenseAgreements
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldsgameCenterEnabledVersions
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsreviewSubmissions
     * @param  array<int, string>|null  $fieldssubscriptionGracePeriods
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsandroidToIosAppMappingDetails
     * @param  array<int, string>|null  $include
     */
    public function ciProductsAppGetToOneRelated(
        string $id,
        ?array $fieldsapps = null,
        ?array $fieldsappEncryptionDeclarations = null,
        ?array $fieldsbuildIcons = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldspreReleaseVersions = null,
        ?array $fieldsbetaAppLocalizations = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaLicenseAgreements = null,
        ?array $fieldsbetaAppReviewDetails = null,
        ?array $fieldsappInfos = null,
        ?array $fieldsappClips = null,
        ?array $fieldsendUserLicenseAgreements = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldssubscriptionGroups = null,
        ?array $fieldsgameCenterEnabledVersions = null,
        ?array $fieldsappCustomProductPages = null,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsreviewSubmissions = null,
        ?array $fieldssubscriptionGracePeriods = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsandroidToIosAppMappingDetails = null,
        ?array $include = null,
        ?int $limitappEncryptionDeclarations = null,
        ?int $limitbetaGroups = null,
        ?int $limitappStoreVersions = null,
        ?int $limitpreReleaseVersions = null,
        ?int $limitbetaAppLocalizations = null,
        ?int $limitbuilds = null,
        ?int $limitappInfos = null,
        ?int $limitappClips = null,
        ?int $limitinAppPurchases = null,
        ?int $limitsubscriptionGroups = null,
        ?int $limitgameCenterEnabledVersions = null,
        ?int $limitappCustomProductPages = null,
        ?int $limitinAppPurchasesV2 = null,
        ?int $limitpromotedPurchases = null,
        ?int $limitappEvents = null,
        ?int $limitreviewSubmissions = null,
        ?int $limitappStoreVersionExperimentsV2 = null,
        ?int $limitandroidToIosAppMappingDetails = null,
    ): Response {
        return $this->connector->send(new CiProductsAppGetToOneRelated($id, $fieldsapps, $fieldsappEncryptionDeclarations, $fieldsbuildIcons, $fieldsciProducts, $fieldsbetaGroups, $fieldsappStoreVersions, $fieldspreReleaseVersions, $fieldsbetaAppLocalizations, $fieldsbuilds, $fieldsbetaLicenseAgreements, $fieldsbetaAppReviewDetails, $fieldsappInfos, $fieldsappClips, $fieldsendUserLicenseAgreements, $fieldsinAppPurchases, $fieldssubscriptionGroups, $fieldsgameCenterEnabledVersions, $fieldsappCustomProductPages, $fieldspromotedPurchases, $fieldsappEvents, $fieldsreviewSubmissions, $fieldssubscriptionGracePeriods, $fieldsgameCenterDetails, $fieldsappStoreVersionExperiments, $fieldsandroidToIosAppMappingDetails, $include, $limitappEncryptionDeclarations, $limitbetaGroups, $limitappStoreVersions, $limitpreReleaseVersions, $limitbetaAppLocalizations, $limitbuilds, $limitappInfos, $limitappClips, $limitinAppPurchases, $limitsubscriptionGroups, $limitgameCenterEnabledVersions, $limitappCustomProductPages, $limitinAppPurchasesV2, $limitpromotedPurchases, $limitappEvents, $limitreviewSubmissions, $limitappStoreVersionExperimentsV2, $limitandroidToIosAppMappingDetails));
    }

    public function ciProductsBuildRunsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiProductsBuildRunsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsciBuildRuns
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsciWorkflows
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $fieldsscmPullRequests
     * @param  array<int, string>|null  $include
     */
    public function ciProductsBuildRunsGetToManyRelated(
        string $id,
        ?array $filterbuilds = null,
        ?array $sort = null,
        ?array $fieldsciBuildRuns = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsciWorkflows = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsscmGitReferences = null,
        ?array $fieldsscmPullRequests = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new CiProductsBuildRunsGetToManyRelated($id, $filterbuilds, $sort, $fieldsciBuildRuns, $fieldsbuilds, $fieldsciWorkflows, $fieldsciProducts, $fieldsscmGitReferences, $fieldsscmPullRequests, $limit, $include, $limitbuilds));
    }

    public function ciProductsPrimaryRepositoriesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiProductsPrimaryRepositoriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsscmProviders
     * @param  array<int, string>|null  $fieldsscmGitReferences
     * @param  array<int, string>|null  $include
     */
    public function ciProductsPrimaryRepositoriesGetToManyRelated(
        string $id,
        ?array $filterid = null,
        ?array $fieldsscmRepositories = null,
        ?array $fieldsscmProviders = null,
        ?array $fieldsscmGitReferences = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CiProductsPrimaryRepositoriesGetToManyRelated($id, $filterid, $fieldsscmRepositories, $fieldsscmProviders, $fieldsscmGitReferences, $limit, $include));
    }

    public function ciProductsWorkflowsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new CiProductsWorkflowsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsciWorkflows
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $fieldsciXcodeVersions
     * @param  array<int, string>|null  $fieldsciMacOsVersions
     * @param  array<int, string>|null  $include
     */
    public function ciProductsWorkflowsGetToManyRelated(
        string $id,
        ?array $fieldsciWorkflows = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsscmRepositories = null,
        ?array $fieldsciXcodeVersions = null,
        ?array $fieldsciMacOsVersions = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new CiProductsWorkflowsGetToManyRelated($id, $fieldsciWorkflows, $fieldsciProducts, $fieldsscmRepositories, $fieldsciXcodeVersions, $fieldsciMacOsVersions, $limit, $include));
    }
}
