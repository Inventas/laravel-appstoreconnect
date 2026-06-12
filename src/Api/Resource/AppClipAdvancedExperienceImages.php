<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipAdvancedExperienceImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppClipAdvancedExperienceImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperienceImages\AppClipAdvancedExperienceImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperienceImages\AppClipAdvancedExperienceImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipAdvancedExperienceImages\AppClipAdvancedExperienceImagesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppClipAdvancedExperienceImages extends BaseResource
{
    public function appClipAdvancedExperienceImagesCreateInstance(
        AppClipAdvancedExperienceImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipAdvancedExperienceImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipAdvancedExperienceImages
     */
    public function appClipAdvancedExperienceImagesGetInstance(
        string $id,
        ?array $fieldsappClipAdvancedExperienceImages = null,
    ): Response {
        return $this->connector->send(new AppClipAdvancedExperienceImagesGetInstance($id, $fieldsappClipAdvancedExperienceImages));
    }

    public function appClipAdvancedExperienceImagesUpdateInstance(
        string $id,
        AppClipAdvancedExperienceImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipAdvancedExperienceImagesUpdateInstance($id, $payload));
    }
}
