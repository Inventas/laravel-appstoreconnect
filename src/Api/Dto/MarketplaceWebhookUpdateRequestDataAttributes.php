<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MarketplaceWebhookUpdateRequestDataAttributes
 */
class MarketplaceWebhookUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $endpointUrl = new Optional,
        public string|Optional|null $secret = new Optional,
    ) {}
}
