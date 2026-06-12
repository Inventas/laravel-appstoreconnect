<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookPingCreateRequestData
 */
class WebhookPingCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public WebhookPingCreateRequestDataRelationships $relationships,
    ) {}
}
