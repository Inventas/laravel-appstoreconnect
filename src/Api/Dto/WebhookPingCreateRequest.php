<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookPingCreateRequest
 */
class WebhookPingCreateRequest extends SpatieData
{
    public function __construct(
        public WebhookPingCreateRequestData $data,
    ) {}
}
