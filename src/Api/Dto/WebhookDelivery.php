<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookDelivery
 */
class WebhookDelivery extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public WebhookDeliveryAttributes|Optional $attributes = new Optional,
        public WebhookDeliveryRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
