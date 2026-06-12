<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipDefaultExperienceCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppClipDefaultExperienceUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesAppClipAppStoreReviewDetailGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesAppClipAppStoreReviewDetailGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesAppClipDefaultExperienceLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesAppClipDefaultExperienceLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesReleaseWithAppStoreVersionGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesReleaseWithAppStoreVersionGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesReleaseWithAppStoreVersionUpdateToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences\AppClipDefaultExperiencesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppClipDefaultExperiences extends BaseResource
{
    public function appClipDefaultExperiencesCreateInstance(
        AppClipDefaultExperienceCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperiencesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $fieldsappClipAppStoreReviewDetails
     * @param  array<int, string>|null  $include
     */
    public function appClipDefaultExperiencesGetInstance(
        string $id,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $fieldsappClips = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappClipDefaultExperienceLocalizations = null,
        ?array $fieldsappClipAppStoreReviewDetails = null,
        ?array $include = null,
        ?int $limitappClipDefaultExperienceLocalizations = null,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperiencesGetInstance($id, $fieldsappClipDefaultExperiences, $fieldsappClips, $fieldsappStoreVersions, $fieldsappClipDefaultExperienceLocalizations, $fieldsappClipAppStoreReviewDetails, $include, $limitappClipDefaultExperienceLocalizations));
    }

    public function appClipDefaultExperiencesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppClipDefaultExperiencesDeleteInstance($id));
    }

    public function appClipDefaultExperiencesUpdateInstance(
        string $id,
        AppClipDefaultExperienceUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperiencesUpdateInstance($id, $payload));
    }

    public function appClipDefaultExperiencesAppClipAppStoreReviewDetailGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppClipDefaultExperiencesAppClipAppStoreReviewDetailGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipAppStoreReviewDetails
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $include
     */
    public function appClipDefaultExperiencesAppClipAppStoreReviewDetailGetToOneRelated(
        string $id,
        ?array $fieldsappClipAppStoreReviewDetails = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperiencesAppClipAppStoreReviewDetailGetToOneRelated($id, $fieldsappClipAppStoreReviewDetails, $fieldsappClipDefaultExperiences, $include));
    }

    public function appClipDefaultExperiencesAppClipDefaultExperienceLocalizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperiencesAppClipDefaultExperienceLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappClipHeaderImages
     * @param  array<int, string>|null  $include
     */
    public function appClipDefaultExperiencesAppClipDefaultExperienceLocalizationsGetToManyRelated(
        string $id,
        ?array $filterlocale = null,
        ?array $fieldsappClipDefaultExperienceLocalizations = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $fieldsappClipHeaderImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperiencesAppClipDefaultExperienceLocalizationsGetToManyRelated($id, $filterlocale, $fieldsappClipDefaultExperienceLocalizations, $fieldsappClipDefaultExperiences, $fieldsappClipHeaderImages, $limit, $include));
    }

    public function appClipDefaultExperiencesReleaseWithAppStoreVersionGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppClipDefaultExperiencesReleaseWithAppStoreVersionGetToOneRelationship($id));
    }

    public function appClipDefaultExperiencesReleaseWithAppStoreVersionUpdateToOneRelationship(
        string $id,
        AppClipDefaultExperienceReleaseWithAppStoreVersionLinkageRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperiencesReleaseWithAppStoreVersionUpdateToOneRelationship($id, $payload));
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
    public function appClipDefaultExperiencesReleaseWithAppStoreVersionGetToOneRelated(
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
        return $this->connector->send(new AppClipDefaultExperiencesReleaseWithAppStoreVersionGetToOneRelated($id, $fieldsappStoreVersions, $fieldsapps, $fieldsappStoreVersionLocalizations, $fieldsbuilds, $fieldsappStoreVersionPhasedReleases, $fieldsgameCenterAppVersions, $fieldsroutingAppCoverages, $fieldsappStoreReviewDetails, $fieldsappStoreVersionSubmissions, $fieldsappClipDefaultExperiences, $fieldsappStoreVersionExperiments, $fieldsalternativeDistributionPackages, $include, $limitappStoreVersionLocalizations, $limitappStoreVersionExperiments, $limitappStoreVersionExperimentsV2));
    }
}
