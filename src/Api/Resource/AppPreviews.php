<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppPreviewCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppPreviewUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviews\AppPreviewsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviews\AppPreviewsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviews\AppPreviewsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviews\AppPreviewsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppPreviews extends BaseResource
{
    public function appPreviewsCreateInstance(
        AppPreviewCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppPreviewsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappPreviews
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function appPreviewsGetInstance(
        string $id,
        ?array $fieldsappPreviews = null,
        ?array $fieldsappPreviewSets = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppPreviewsGetInstance($id, $fieldsappPreviews, $fieldsappPreviewSets, $include));
    }

    public function appPreviewsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppPreviewsDeleteInstance($id));
    }

    public function appPreviewsUpdateInstance(
        string $id,
        AppPreviewUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppPreviewsUpdateInstance($id, $payload));
    }
}
