<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppClipHeaderImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppClipHeaderImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipHeaderImages\AppClipHeaderImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipHeaderImages\AppClipHeaderImagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipHeaderImages\AppClipHeaderImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppClipHeaderImages\AppClipHeaderImagesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppClipHeaderImages extends BaseResource
{
    public function appClipHeaderImagesCreateInstance(
        AppClipHeaderImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipHeaderImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipHeaderImages
     * @param  array<int, string>|null  $fieldsappClipDefaultExperienceLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appClipHeaderImagesGetInstance(
        string $id,
        ?array $fieldsappClipHeaderImages = null,
        ?array $fieldsappClipDefaultExperienceLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppClipHeaderImagesGetInstance($id, $fieldsappClipHeaderImages, $fieldsappClipDefaultExperienceLocalizations, $include));
    }

    public function appClipHeaderImagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppClipHeaderImagesDeleteInstance($id));
    }

    public function appClipHeaderImagesUpdateInstance(
        string $id,
        AppClipHeaderImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppClipHeaderImagesUpdateInstance($id, $payload));
    }
}
