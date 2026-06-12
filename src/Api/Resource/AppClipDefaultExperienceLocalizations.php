<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipDefaultExperienceLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppClipDefaultExperienceLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations\AppClipDefaultExperienceLocalizationsAppClipHeaderImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations\AppClipDefaultExperienceLocalizationsAppClipHeaderImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations\AppClipDefaultExperienceLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations\AppClipDefaultExperienceLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations\AppClipDefaultExperienceLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperienceLocalizations\AppClipDefaultExperienceLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppClipDefaultExperienceLocalizations extends BaseResource
{
    public function appClipDefaultExperienceLocalizationsCreateInstance(
        AppClipDefaultExperienceLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperienceLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappClipHeaderImages
     * @param  array<int, string>|null  $include
     */
    public function appClipDefaultExperienceLocalizationsGetInstance(
        string $id,
        ?array $fieldsappClipDefaultExperienceLocalizations = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $fieldsappClipHeaderImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperienceLocalizationsGetInstance($id, $fieldsappClipDefaultExperienceLocalizations, $fieldsappClipDefaultExperiences, $fieldsappClipHeaderImages, $include));
    }

    public function appClipDefaultExperienceLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppClipDefaultExperienceLocalizationsDeleteInstance($id));
    }

    public function appClipDefaultExperienceLocalizationsUpdateInstance(
        string $id,
        AppClipDefaultExperienceLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperienceLocalizationsUpdateInstance($id, $payload));
    }

    public function appClipDefaultExperienceLocalizationsAppClipHeaderImageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppClipDefaultExperienceLocalizationsAppClipHeaderImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipHeaderImages
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appClipDefaultExperienceLocalizationsAppClipHeaderImageGetToOneRelated(
        string $id,
        ?array $fieldsappClipHeaderImages = null,
        ?array $fieldsappClipDefaultExperienceLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppClipDefaultExperienceLocalizationsAppClipHeaderImageGetToOneRelated($id, $fieldsappClipHeaderImages, $fieldsappClipDefaultExperienceLocalizations, $include));
    }
}
