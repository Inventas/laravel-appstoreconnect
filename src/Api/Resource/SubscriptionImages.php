<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionImages\SubscriptionImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionImages\SubscriptionImagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionImages\SubscriptionImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionImages\SubscriptionImagesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionImages extends BaseResource
{
    public function subscriptionImagesCreateInstance(
        SubscriptionImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionImages
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function subscriptionImagesGetInstance(
        string $id,
        ?array $fieldssubscriptionImages = null,
        ?array $fieldssubscriptions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionImagesGetInstance($id, $fieldssubscriptionImages, $fieldssubscriptions, $include));
    }

    public function subscriptionImagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionImagesDeleteInstance($id));
    }

    public function subscriptionImagesUpdateInstance(
        string $id,
        SubscriptionImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionImagesUpdateInstance($id, $payload));
    }
}
