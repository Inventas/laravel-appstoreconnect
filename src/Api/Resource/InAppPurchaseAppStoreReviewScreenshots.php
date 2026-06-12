<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseAppStoreReviewScreenshotCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseAppStoreReviewScreenshotUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAppStoreReviewScreenshots\InAppPurchaseAppStoreReviewScreenshotsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAppStoreReviewScreenshots\InAppPurchaseAppStoreReviewScreenshotsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAppStoreReviewScreenshots\InAppPurchaseAppStoreReviewScreenshotsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAppStoreReviewScreenshots\InAppPurchaseAppStoreReviewScreenshotsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseAppStoreReviewScreenshots extends BaseResource
{
    public function inAppPurchaseAppStoreReviewScreenshotsCreateInstance(
        InAppPurchaseAppStoreReviewScreenshotCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseAppStoreReviewScreenshotsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseAppStoreReviewScreenshotsGetInstance(
        string $id,
        ?array $fieldsinAppPurchaseAppStoreReviewScreenshots = null,
        ?array $fieldsinAppPurchases = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseAppStoreReviewScreenshotsGetInstance($id, $fieldsinAppPurchaseAppStoreReviewScreenshots, $fieldsinAppPurchases, $include));
    }

    public function inAppPurchaseAppStoreReviewScreenshotsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new InAppPurchaseAppStoreReviewScreenshotsDeleteInstance($id));
    }

    public function inAppPurchaseAppStoreReviewScreenshotsUpdateInstance(
        string $id,
        InAppPurchaseAppStoreReviewScreenshotUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseAppStoreReviewScreenshotsUpdateInstance($id, $payload));
    }
}
