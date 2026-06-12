<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MarketplaceWebhook
 */
class MarketplaceWebhook extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public MarketplaceWebhookAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
