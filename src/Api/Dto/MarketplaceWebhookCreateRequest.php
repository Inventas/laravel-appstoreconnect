<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceWebhookCreateRequest
 */
class MarketplaceWebhookCreateRequest extends SpatieData
{
    public function __construct(
        public MarketplaceWebhookCreateRequestData $data,
    ) {}
}
