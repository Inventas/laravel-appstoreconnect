<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookDeliveryRelationships
 */
class WebhookDeliveryRelationships extends SpatieData
{
    public function __construct(
        public WebhookDeliveryRelationshipsEvent|Optional $event = new Optional,
    ) {}
}
