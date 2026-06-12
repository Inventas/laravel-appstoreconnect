<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionAppClipDefaultExperienceLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionBuildLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAlternativeDistributionPackageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAlternativeDistributionPackageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppClipDefaultExperienceGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppClipDefaultExperienceGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppClipDefaultExperienceUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreReviewDetailGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreReviewDetailGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionExperimentsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionExperimentsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionExperimentsV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionExperimentsV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionSubmissionGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsAppStoreVersionSubmissionGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsBuildGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsBuildGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsBuildUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsCustomerReviewsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsCustomerReviewsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsGameCenterAppVersionGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsGameCenterAppVersionGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsRoutingAppCoverageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsRoutingAppCoverageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions\AppStoreVersionsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersions extends BaseResource
{
    public function appStoreVersionsCreateInstance(
        AppStoreVersionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionsCreateInstance($payload));
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
    public function appStoreVersionsGetInstance(
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
        ?int $limitappStoreVersionExperiments = null,
        ?int $limitappStoreVersionExperimentsV2 = null,
        ?int $limitappStoreVersionLocalizations = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsGetInstance($id, $fieldsappStoreVersions, $fieldsapps, $fieldsappStoreVersionLocalizations, $fieldsbuilds, $fieldsappStoreVersionPhasedReleases, $fieldsgameCenterAppVersions, $fieldsroutingAppCoverages, $fieldsappStoreReviewDetails, $fieldsappStoreVersionSubmissions, $fieldsappClipDefaultExperiences, $fieldsappStoreVersionExperiments, $fieldsalternativeDistributionPackages, $include, $limitappStoreVersionExperiments, $limitappStoreVersionExperimentsV2, $limitappStoreVersionLocalizations));
    }

    public function appStoreVersionsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsDeleteInstance($id));
    }

    public function appStoreVersionsUpdateInstance(
        string $id,
        AppStoreVersionUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionsUpdateInstance($id, $payload));
    }

    public function appStoreVersionsAlternativeDistributionPackageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsAlternativeDistributionPackageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVersions
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsAlternativeDistributionPackageGetToOneRelated(
        string $id,
        ?array $fieldsalternativeDistributionPackages = null,
        ?array $fieldsalternativeDistributionPackageVersions = null,
        ?array $include = null,
        ?int $limitversions = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAlternativeDistributionPackageGetToOneRelated($id, $fieldsalternativeDistributionPackages, $fieldsalternativeDistributionPackageVersions, $include, $limitversions));
    }

    public function appStoreVersionsAppClipDefaultExperienceGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsAppClipDefaultExperienceGetToOneRelationship($id));
    }

    public function appStoreVersionsAppClipDefaultExperienceUpdateToOneRelationship(
        string $id,
        AppStoreVersionAppClipDefaultExperienceLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppClipDefaultExperienceUpdateToOneRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $fieldsappClipAppStoreReviewDetails
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsAppClipDefaultExperienceGetToOneRelated(
        string $id,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $fieldsappClips = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappClipDefaultExperienceLocalizations = null,
        ?array $fieldsappClipAppStoreReviewDetails = null,
        ?array $include = null,
        ?int $limitappClipDefaultExperienceLocalizations = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppClipDefaultExperienceGetToOneRelated($id, $fieldsappClipDefaultExperiences, $fieldsappClips, $fieldsappStoreVersions, $fieldsappClipDefaultExperienceLocalizations, $fieldsappClipAppStoreReviewDetails, $include, $limitappClipDefaultExperienceLocalizations));
    }

    public function appStoreVersionsAppStoreReviewDetailGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsAppStoreReviewDetailGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreReviewDetails
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreReviewAttachments
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsAppStoreReviewDetailGetToOneRelated(
        string $id,
        ?array $fieldsappStoreReviewDetails = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappStoreReviewAttachments = null,
        ?array $include = null,
        ?int $limitappStoreReviewAttachments = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreReviewDetailGetToOneRelated($id, $fieldsappStoreReviewDetails, $fieldsappStoreVersions, $fieldsappStoreReviewAttachments, $include, $limitappStoreReviewAttachments));
    }

    public function appStoreVersionsAppStoreVersionExperimentsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionExperimentsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsAppStoreVersionExperimentsGetToManyRelated(
        string $id,
        ?array $filterstate = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappStoreVersionExperimentTreatments = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionExperimentsGetToManyRelated($id, $filterstate, $fieldsappStoreVersionExperiments, $fieldsappStoreVersions, $fieldsappStoreVersionExperimentTreatments, $limit, $include, $limitappStoreVersionExperimentTreatments));
    }

    public function appStoreVersionsAppStoreVersionExperimentsV2getToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionExperimentsV2GetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsAppStoreVersionExperimentsV2getToManyRelated(
        string $id,
        ?array $filterstate = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsapps = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcontrolVersions = null,
        ?int $limitappStoreVersionExperimentTreatments = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionExperimentsV2GetToManyRelated($id, $filterstate, $fieldsappStoreVersionExperiments, $fieldsapps, $fieldsappStoreVersions, $fieldsappStoreVersionExperimentTreatments, $limit, $include, $limitcontrolVersions, $limitappStoreVersionExperimentTreatments));
    }

    public function appStoreVersionsAppStoreVersionLocalizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $fieldsappKeywords
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsAppStoreVersionLocalizationsGetToManyRelated(
        string $id,
        ?array $filterlocale = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappPreviewSets = null,
        ?array $fieldsappKeywords = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappScreenshotSets = null,
        ?int $limitappPreviewSets = null,
        ?int $limitsearchKeywords = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionLocalizationsGetToManyRelated($id, $filterlocale, $fieldsappStoreVersionLocalizations, $fieldsappStoreVersions, $fieldsappScreenshotSets, $fieldsappPreviewSets, $fieldsappKeywords, $limit, $include, $limitappScreenshotSets, $limitappPreviewSets, $limitsearchKeywords));
    }

    public function appStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionPhasedReleases
     */
    public function appStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated(
        string $id,
        ?array $fieldsappStoreVersionPhasedReleases = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelated($id, $fieldsappStoreVersionPhasedReleases));
    }

    public function appStoreVersionsAppStoreVersionSubmissionGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionSubmissionGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionSubmissions
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsAppStoreVersionSubmissionGetToOneRelated(
        string $id,
        ?array $fieldsappStoreVersionSubmissions = null,
        ?array $fieldsappStoreVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsAppStoreVersionSubmissionGetToOneRelated($id, $fieldsappStoreVersionSubmissions, $fieldsappStoreVersions, $include));
    }

    public function appStoreVersionsBuildGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsBuildGetToOneRelationship($id));
    }

    public function appStoreVersionsBuildUpdateToOneRelationship(
        string $id,
        AppStoreVersionBuildLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionsBuildUpdateToOneRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function appStoreVersionsBuildGetToOneRelated(string $id, ?array $fieldsbuilds = null): Response
    {
        return $this->connector->send(new AppStoreVersionsBuildGetToOneRelated($id, $fieldsbuilds));
    }

    public function appStoreVersionsCustomerReviewsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppStoreVersionsCustomerReviewsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $filterrating
     * @param  array<int, string>|null  $filterreviewTerritory
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldscustomerReviews
     * @param  array<int, string>|null  $fieldscustomerReviewResponses
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsCustomerReviewsGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $filterrating = null,
        ?array $filterreviewTerritory = null,
        ?bool $existspublishedResponse = null,
        ?array $sort = null,
        ?array $fieldscustomerReviews = null,
        ?array $fieldscustomerReviewResponses = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsCustomerReviewsGetToManyRelated($id, $filterterritory, $filterrating, $filterreviewTerritory, $existspublishedResponse, $sort, $fieldscustomerReviews, $fieldscustomerReviewResponses, $fieldsterritories, $limit, $include));
    }

    public function appStoreVersionsGameCenterAppVersionGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsGameCenterAppVersionGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsGameCenterAppVersionGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterAppVersions = null,
        ?array $fieldsappStoreVersions = null,
        ?array $include = null,
        ?int $limitcompatibilityVersions = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsGameCenterAppVersionGetToOneRelated($id, $fieldsgameCenterAppVersions, $fieldsappStoreVersions, $include, $limitcompatibilityVersions));
    }

    public function appStoreVersionsRoutingAppCoverageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionsRoutingAppCoverageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsroutingAppCoverages
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionsRoutingAppCoverageGetToOneRelated(
        string $id,
        ?array $fieldsroutingAppCoverages = null,
        ?array $fieldsappStoreVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionsRoutingAppCoverageGetToOneRelated($id, $fieldsroutingAppCoverages, $fieldsappStoreVersions, $include));
    }
}
