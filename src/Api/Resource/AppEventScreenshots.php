<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppEventScreenshotCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppEventScreenshotUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventScreenshots\AppEventScreenshotsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventScreenshots\AppEventScreenshotsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventScreenshots\AppEventScreenshotsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppEventScreenshots\AppEventScreenshotsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppEventScreenshots extends BaseResource
{
    public function appEventScreenshotsCreateInstance(
        AppEventScreenshotCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEventScreenshotsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappEventScreenshots
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appEventScreenshotsGetInstance(
        string $id,
        ?array $fieldsappEventScreenshots = null,
        ?array $fieldsappEventLocalizations = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppEventScreenshotsGetInstance($id, $fieldsappEventScreenshots, $fieldsappEventLocalizations, $include));
    }

    public function appEventScreenshotsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppEventScreenshotsDeleteInstance($id));
    }

    public function appEventScreenshotsUpdateInstance(
        string $id,
        AppEventScreenshotUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppEventScreenshotsUpdateInstance($id, $payload));
    }
}
