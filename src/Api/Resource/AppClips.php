<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AppClips\AppClipsAppClipAdvancedExperiencesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppClips\AppClipsAppClipAdvancedExperiencesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppClips\AppClipsAppClipDefaultExperiencesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppClips\AppClipsAppClipDefaultExperiencesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppClips\AppClipsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppClips extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $include
     */
    public function appClipsGetInstance(
        string $id,
        ?array $fieldsappClips = null,
        ?array $fieldsapps = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $include = null,
        ?int $limitappClipDefaultExperiences = null,
    ): Response {
        return $this->connector->send(new AppClipsGetInstance($id, $fieldsappClips, $fieldsapps, $fieldsappClipDefaultExperiences, $include, $limitappClipDefaultExperiences));
    }

    public function appClipsAppClipAdvancedExperiencesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppClipsAppClipAdvancedExperiencesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterstatus
     * @param  array<int, string>|null  $filterplaceStatus
     * @param  array<int, string>|null  $filteraction
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperiences
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceImages
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appClipsAppClipAdvancedExperiencesGetToManyRelated(
        string $id,
        ?array $filterstatus = null,
        ?array $filterplaceStatus = null,
        ?array $filteraction = null,
        ?array $fieldsappClipAdvancedExperiences = null,
        ?array $fieldsappClips = null,
        ?array $fieldsappClipAdvancedExperienceImages = null,
        ?array $fieldsappClipAdvancedExperienceLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new AppClipsAppClipAdvancedExperiencesGetToManyRelated($id, $filterstatus, $filterplaceStatus, $filteraction, $fieldsappClipAdvancedExperiences, $fieldsappClips, $fieldsappClipAdvancedExperienceImages, $fieldsappClipAdvancedExperienceLocalizations, $limit, $include, $limitlocalizations));
    }

    public function appClipsAppClipDefaultExperiencesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppClipsAppClipDefaultExperiencesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $fieldsappClipAppStoreReviewDetails
     * @param  array<int, string>|null  $include
     */
    public function appClipsAppClipDefaultExperiencesGetToManyRelated(
        string $id,
        ?bool $existsreleaseWithAppStoreVersion = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $fieldsappClips = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappClipDefaultExperienceLocalizations = null,
        ?array $fieldsappClipAppStoreReviewDetails = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappClipDefaultExperienceLocalizations = null,
    ): Response {
        return $this->connector->send(new AppClipsAppClipDefaultExperiencesGetToManyRelated($id, $existsreleaseWithAppStoreVersion, $fieldsappClipDefaultExperiences, $fieldsappClips, $fieldsappStoreVersions, $fieldsappClipDefaultExperienceLocalizations, $fieldsappClipAppStoreReviewDetails, $limit, $include, $limitappClipDefaultExperienceLocalizations));
    }
}
