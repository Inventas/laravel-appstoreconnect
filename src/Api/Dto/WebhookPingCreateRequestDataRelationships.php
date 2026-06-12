<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookPingCreateRequestDataRelationships
 */
class WebhookPingCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public WebhookPingCreateRequestDataRelationshipsWebhook $webhook,
    ) {}
}
