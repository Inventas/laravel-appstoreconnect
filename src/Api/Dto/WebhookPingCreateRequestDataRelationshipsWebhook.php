<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookPingCreateRequestDataRelationshipsWebhook
 */
class WebhookPingCreateRequestDataRelationshipsWebhook extends SpatieData
{
    public function __construct(
        public WebhookPingCreateRequestDataRelationshipsWebhookData $data,
    ) {}
}
