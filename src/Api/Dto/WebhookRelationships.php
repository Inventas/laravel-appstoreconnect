<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookRelationships
 */
class WebhookRelationships extends SpatieData
{
    public function __construct(
        public WebhookRelationshipsApp|Optional $app = new Optional,
        public WebhookRelationshipsDeliveries|Optional $deliveries = new Optional,
    ) {}
}
