<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseImages\InAppPurchaseImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseImages\InAppPurchaseImagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseImages\InAppPurchaseImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseImages\InAppPurchaseImagesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseImages extends BaseResource
{
    public function inAppPurchaseImagesCreateInstance(
        InAppPurchaseImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseImages
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseImagesGetInstance(
        string $id,
        ?array $fieldsinAppPurchaseImages = null,
        ?array $fieldsinAppPurchases = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseImagesGetInstance($id, $fieldsinAppPurchaseImages, $fieldsinAppPurchases, $include));
    }

    public function inAppPurchaseImagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new InAppPurchaseImagesDeleteInstance($id));
    }

    public function inAppPurchaseImagesUpdateInstance(
        string $id,
        InAppPurchaseImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseImagesUpdateInstance($id, $payload));
    }
}
