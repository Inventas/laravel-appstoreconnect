<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookDeliveryRelationshipsEvent
 */
class WebhookDeliveryRelationshipsEvent extends SpatieData
{
    public function __construct(
        public WebhookDeliveryRelationshipsEventData|Optional $data = new Optional,
    ) {}
}
