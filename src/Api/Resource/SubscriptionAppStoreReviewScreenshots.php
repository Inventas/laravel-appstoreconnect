<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionAppStoreReviewScreenshotCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionAppStoreReviewScreenshotUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAppStoreReviewScreenshots\SubscriptionAppStoreReviewScreenshotsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAppStoreReviewScreenshots\SubscriptionAppStoreReviewScreenshotsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAppStoreReviewScreenshots\SubscriptionAppStoreReviewScreenshotsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAppStoreReviewScreenshots\SubscriptionAppStoreReviewScreenshotsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionAppStoreReviewScreenshots extends BaseResource
{
    public function subscriptionAppStoreReviewScreenshotsCreateInstance(
        SubscriptionAppStoreReviewScreenshotCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionAppStoreReviewScreenshotsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function subscriptionAppStoreReviewScreenshotsGetInstance(
        string $id,
        ?array $fieldssubscriptionAppStoreReviewScreenshots = null,
        ?array $fieldssubscriptions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionAppStoreReviewScreenshotsGetInstance($id, $fieldssubscriptionAppStoreReviewScreenshots, $fieldssubscriptions, $include));
    }

    public function subscriptionAppStoreReviewScreenshotsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionAppStoreReviewScreenshotsDeleteInstance($id));
    }

    public function subscriptionAppStoreReviewScreenshotsUpdateInstance(
        string $id,
        SubscriptionAppStoreReviewScreenshotUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionAppStoreReviewScreenshotsUpdateInstance($id, $payload));
    }
}
