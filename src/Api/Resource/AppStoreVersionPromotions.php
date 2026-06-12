<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionPromotionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionPromotions\AppStoreVersionPromotionsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersionPromotions extends BaseResource
{
    public function appStoreVersionPromotionsCreateInstance(
        AppStoreVersionPromotionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionPromotionsCreateInstance($payload));
    }
}
