<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppScreenshotCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppScreenshotUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshots\AppScreenshotsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshots\AppScreenshotsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshots\AppScreenshotsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshots\AppScreenshotsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppScreenshots extends BaseResource
{
    public function appScreenshotsCreateInstance(
        AppScreenshotCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppScreenshotsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappScreenshots
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $include
     */
    public function appScreenshotsGetInstance(
        string $id,
        ?array $fieldsappScreenshots = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppScreenshotsGetInstance($id, $fieldsappScreenshots, $fieldsappScreenshotSets, $include));
    }

    public function appScreenshotsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppScreenshotsDeleteInstance($id));
    }

    public function appScreenshotsUpdateInstance(
        string $id,
        AppScreenshotUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppScreenshotsUpdateInstance($id, $payload));
    }
}
