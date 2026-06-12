<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAdvancedExperienceCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppClipAdvancedExperienceUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperiences\AppClipAdvancedExperiencesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperiences\AppClipAdvancedExperiencesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperiences\AppClipAdvancedExperiencesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppClipAdvancedExperiences extends BaseResource
{
    public function appClipAdvancedExperiencesCreateInstance(
        AppClipAdvancedExperienceCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipAdvancedExperiencesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperiences
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceImages
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appClipAdvancedExperiencesGetInstance(
        string $id,
        ?array $fieldsappClipAdvancedExperiences = null,
        ?array $fieldsappClips = null,
        ?array $fieldsappClipAdvancedExperienceImages = null,
        ?array $fieldsappClipAdvancedExperienceLocalizations = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new AppClipAdvancedExperiencesGetInstance($id, $fieldsappClipAdvancedExperiences, $fieldsappClips, $fieldsappClipAdvancedExperienceImages, $fieldsappClipAdvancedExperienceLocalizations, $include, $limitlocalizations));
    }

    public function appClipAdvancedExperiencesUpdateInstance(
        string $id,
        AppClipAdvancedExperienceUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipAdvancedExperiencesUpdateInstance($id, $payload));
    }
}
