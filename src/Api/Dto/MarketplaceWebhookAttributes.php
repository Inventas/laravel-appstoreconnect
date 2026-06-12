<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MarketplaceWebhookAttributes
 */
class MarketplaceWebhookAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $endpointUrl = new Optional,
    ) {}
}
