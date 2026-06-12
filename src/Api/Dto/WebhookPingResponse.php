<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookPingResponse
 */
class WebhookPingResponse extends SpatieData
{
    public function __construct(
        public WebhookPing $data,
        public DocumentLinks $links,
    ) {}
}
