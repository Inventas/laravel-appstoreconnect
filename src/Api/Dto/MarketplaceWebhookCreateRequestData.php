<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceWebhookCreateRequestData
 */
class MarketplaceWebhookCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public MarketplaceWebhookCreateRequestDataAttributes $attributes,
    ) {}
}
