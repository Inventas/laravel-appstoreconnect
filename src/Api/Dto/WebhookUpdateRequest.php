<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookUpdateRequest
 */
class WebhookUpdateRequest extends SpatieData
{
    public function __construct(
        public WebhookUpdateRequestData $data,
    ) {}
}
