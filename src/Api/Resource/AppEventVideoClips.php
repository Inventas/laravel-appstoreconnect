<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventVideoClipCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppEventVideoClipUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventVideoClips\AppEventVideoClipsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventVideoClips\AppEventVideoClipsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventVideoClips\AppEventVideoClipsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventVideoClips\AppEventVideoClipsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppEventVideoClips extends BaseResource
{
    public function appEventVideoClipsCreateInstance(
        AppEventVideoClipCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEventVideoClipsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventVideoClips
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appEventVideoClipsGetInstance(
        string $id,
        ?array $fieldsappEventVideoClips = null,
        ?array $fieldsappEventLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppEventVideoClipsGetInstance($id, $fieldsappEventVideoClips, $fieldsappEventLocalizations, $include));
    }

    public function appEventVideoClipsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppEventVideoClipsDeleteInstance($id));
    }

    public function appEventVideoClipsUpdateInstance(
        string $id,
        AppEventVideoClipUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEventVideoClipsUpdateInstance($id, $payload));
    }
}
