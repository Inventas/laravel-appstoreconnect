<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MarketplaceWebhookResponse
 */
class MarketplaceWebhookResponse extends SpatieData
{
    public function __construct(
        public MarketplaceWebhook $data,
        public DocumentLinks $links,
    ) {}
}
