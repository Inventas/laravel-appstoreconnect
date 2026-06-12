<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceWebhookUpdateRequest
 */
class MarketplaceWebhookUpdateRequest extends SpatieData
{
    public function __construct(
        public MarketplaceWebhookUpdateRequestData $data,
    ) {}
}
