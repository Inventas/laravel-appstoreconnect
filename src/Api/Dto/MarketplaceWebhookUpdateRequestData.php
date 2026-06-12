<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MarketplaceWebhookUpdateRequestData
 */
class MarketplaceWebhookUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public MarketplaceWebhookUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
