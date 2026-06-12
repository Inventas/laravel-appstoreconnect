<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BuildAppEncryptionDeclarationLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BuildBetaGroupsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BuildIndividualTestersLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BuildUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsAppEncryptionDeclarationGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsAppEncryptionDeclarationGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsAppEncryptionDeclarationUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsAppStoreVersionGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsAppStoreVersionGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBetaAppReviewSubmissionGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBetaAppReviewSubmissionGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBetaBuildLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBetaBuildLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBetaBuildUsagesGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBetaGroupsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBetaGroupsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBuildBetaDetailGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsBuildBetaDetailGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsDiagnosticSignaturesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsDiagnosticSignaturesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsIconsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsIconsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsIndividualTestersCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsIndividualTestersDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsIndividualTestersGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsIndividualTestersGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsPerfPowerMetricsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsPreReleaseVersionGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsPreReleaseVersionGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Builds\BuildsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Builds extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterversion
     * @param  array<int, string>|null  $filterexpired
     * @param  array<int, string>|null  $filterprocessingState
     * @param  array<int, string>|null  $filterbetaAppReviewSubmissionBetaReviewState
     * @param  array<int, string>|null  $filterusesNonExemptEncryption
     * @param  array<int, string>|null  $filterpreReleaseVersionVersion
     * @param  array<int, string>|null  $filterpreReleaseVersionPlatform
     * @param  array<int, string>|null  $filterbuildAudienceType
     * @param  array<int, string>|null  $filterpreReleaseVersion
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterbetaGroups
     * @param  array<int, string>|null  $filterappStoreVersion
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
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
    public function buildsGetCollection(
        ?array $filterversion = null,
        ?array $filterexpired = null,
        ?array $filterprocessingState = null,
        ?array $filterbetaAppReviewSubmissionBetaReviewState = null,
        ?array $filterusesNonExemptEncryption = null,
        ?array $filterpreReleaseVersionVersion = null,
        ?array $filterpreReleaseVersionPlatform = null,
        ?array $filterbuildAudienceType = null,
        ?array $filterpreReleaseVersion = null,
        ?array $filterapp = null,
        ?array $filterbetaGroups = null,
        ?array $filterappStoreVersion = null,
        ?array $filterid = null,
        ?bool $existsusesNonExemptEncryption = null,
        ?array $sort = null,
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
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbetaBuildLocalizations = null,
        ?int $limitbetaGroups = null,
        ?int $limitbuildBundles = null,
        ?int $limiticons = null,
        ?int $limitindividualTesters = null,
    ): Response {
        return $this->connector->send(new BuildsGetCollection($filterversion, $filterexpired, $filterprocessingState, $filterbetaAppReviewSubmissionBetaReviewState, $filterusesNonExemptEncryption, $filterpreReleaseVersionVersion, $filterpreReleaseVersionPlatform, $filterbuildAudienceType, $filterpreReleaseVersion, $filterapp, $filterbetaGroups, $filterappStoreVersion, $filterid, $existsusesNonExemptEncryption, $sort, $fieldsbuilds, $fieldspreReleaseVersions, $fieldsbetaTesters, $fieldsbetaGroups, $fieldsbetaBuildLocalizations, $fieldsappEncryptionDeclarations, $fieldsbetaAppReviewSubmissions, $fieldsapps, $fieldsbuildBetaDetails, $fieldsappStoreVersions, $fieldsbuildIcons, $fieldsbuildBundles, $fieldsbuildUploads, $limit, $include, $limitbetaBuildLocalizations, $limitbetaGroups, $limitbuildBundles, $limiticons, $limitindividualTesters));
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
    public function buildsGetInstance(
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
        ?int $limitbetaBuildLocalizations = null,
        ?int $limitbetaGroups = null,
        ?int $limitbuildBundles = null,
        ?int $limiticons = null,
        ?int $limitindividualTesters = null,
    ): Response {
        return $this->connector->send(new BuildsGetInstance($id, $fieldsbuilds, $fieldspreReleaseVersions, $fieldsbetaTesters, $fieldsbetaGroups, $fieldsbetaBuildLocalizations, $fieldsappEncryptionDeclarations, $fieldsbetaAppReviewSubmissions, $fieldsapps, $fieldsbuildBetaDetails, $fieldsappStoreVersions, $fieldsbuildIcons, $fieldsbuildBundles, $fieldsbuildUploads, $include, $limitbetaBuildLocalizations, $limitbetaGroups, $limitbuildBundles, $limiticons, $limitindividualTesters));
    }

    public function buildsUpdateInstance(
        string $id,
        BuildUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BuildsUpdateInstance($id, $payload));
    }

    public function buildsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function buildsAppGetToOneRelated(string $id, ?array $fieldsapps = null): Response
    {
        return $this->connector->send(new BuildsAppGetToOneRelated($id, $fieldsapps));
    }

    public function buildsAppEncryptionDeclarationGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildsAppEncryptionDeclarationGetToOneRelationship($id));
    }

    public function buildsAppEncryptionDeclarationUpdateToOneRelationship(
        string $id,
        BuildAppEncryptionDeclarationLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new BuildsAppEncryptionDeclarationUpdateToOneRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     */
    public function buildsAppEncryptionDeclarationGetToOneRelated(
        string $id,
        ?array $fieldsappEncryptionDeclarations = null,
    ): Response {
        return $this->connector->send(new BuildsAppEncryptionDeclarationGetToOneRelated($id, $fieldsappEncryptionDeclarations));
    }

    public function buildsAppStoreVersionGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildsAppStoreVersionGetToOneRelationship($id));
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
    public function buildsAppStoreVersionGetToOneRelated(
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
        return $this->connector->send(new BuildsAppStoreVersionGetToOneRelated($id, $fieldsappStoreVersions, $fieldsapps, $fieldsappStoreVersionLocalizations, $fieldsbuilds, $fieldsappStoreVersionPhasedReleases, $fieldsgameCenterAppVersions, $fieldsroutingAppCoverages, $fieldsappStoreReviewDetails, $fieldsappStoreVersionSubmissions, $fieldsappClipDefaultExperiences, $fieldsappStoreVersionExperiments, $fieldsalternativeDistributionPackages, $include, $limitappStoreVersionLocalizations, $limitappStoreVersionExperiments, $limitappStoreVersionExperimentsV2));
    }

    public function buildsBetaAppReviewSubmissionGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildsBetaAppReviewSubmissionGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     */
    public function buildsBetaAppReviewSubmissionGetToOneRelated(
        string $id,
        ?array $fieldsbetaAppReviewSubmissions = null,
    ): Response {
        return $this->connector->send(new BuildsBetaAppReviewSubmissionGetToOneRelated($id, $fieldsbetaAppReviewSubmissions));
    }

    public function buildsBetaBuildLocalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BuildsBetaBuildLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     */
    public function buildsBetaBuildLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsbetaBuildLocalizations = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BuildsBetaBuildLocalizationsGetToManyRelated($id, $fieldsbetaBuildLocalizations, $limit));
    }

    public function buildsBetaGroupsCreateToManyRelationship(
        string $id,
        BuildBetaGroupsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BuildsBetaGroupsCreateToManyRelationship($id, $payload));
    }

    public function buildsBetaGroupsDeleteToManyRelationship(
        string $id,
        BuildBetaGroupsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BuildsBetaGroupsDeleteToManyRelationship($id, $payload));
    }

    public function buildsBuildBetaDetailGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildsBuildBetaDetailGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildBetaDetails
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function buildsBuildBetaDetailGetToOneRelated(
        string $id,
        ?array $fieldsbuildBetaDetails = null,
        ?array $fieldsbuilds = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BuildsBuildBetaDetailGetToOneRelated($id, $fieldsbuildBetaDetails, $fieldsbuilds, $include));
    }

    public function buildsDiagnosticSignaturesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BuildsDiagnosticSignaturesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterdiagnosticType
     * @param  array<int, string>|null  $fieldsdiagnosticSignatures
     */
    public function buildsDiagnosticSignaturesGetToManyRelated(
        string $id,
        ?array $filterdiagnosticType = null,
        ?array $fieldsdiagnosticSignatures = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BuildsDiagnosticSignaturesGetToManyRelated($id, $filterdiagnosticType, $fieldsdiagnosticSignatures, $limit));
    }

    public function buildsIconsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BuildsIconsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildIcons
     */
    public function buildsIconsGetToManyRelated(
        string $id,
        ?array $fieldsbuildIcons = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BuildsIconsGetToManyRelated($id, $fieldsbuildIcons, $limit));
    }

    public function buildsIndividualTestersGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BuildsIndividualTestersGetToManyRelationship($id, $limit));
    }

    public function buildsIndividualTestersCreateToManyRelationship(
        string $id,
        BuildIndividualTestersLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BuildsIndividualTestersCreateToManyRelationship($id, $payload));
    }

    public function buildsIndividualTestersDeleteToManyRelationship(
        string $id,
        BuildIndividualTestersLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new BuildsIndividualTestersDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaTesters
     */
    public function buildsIndividualTestersGetToManyRelated(
        string $id,
        ?array $fieldsbetaTesters = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new BuildsIndividualTestersGetToManyRelated($id, $fieldsbetaTesters, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filtermetricType
     * @param  array<int, string>|null  $filterdeviceType
     */
    public function buildsPerfPowerMetricsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filtermetricType = null,
        ?array $filterdeviceType = null,
    ): Response {
        return $this->connector->send(new BuildsPerfPowerMetricsGetToManyRelated($id, $filterplatform, $filtermetricType, $filterdeviceType));
    }

    public function buildsPreReleaseVersionGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BuildsPreReleaseVersionGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     */
    public function buildsPreReleaseVersionGetToOneRelated(string $id, ?array $fieldspreReleaseVersions = null): Response
    {
        return $this->connector->send(new BuildsPreReleaseVersionGetToOneRelated($id, $fieldspreReleaseVersions));
    }

    public function buildsBetaBuildUsagesGetMetrics(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new BuildsBetaBuildUsagesGetMetrics($id, $limit));
    }
}
