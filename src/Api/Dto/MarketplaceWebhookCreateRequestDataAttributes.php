<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceWebhookCreateRequestDataAttributes
 */
class MarketplaceWebhookCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $endpointUrl,
        public string $secret,
    ) {}
}
