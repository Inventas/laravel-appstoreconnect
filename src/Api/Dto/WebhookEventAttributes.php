<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookEventAttributes
 */
class WebhookEventAttributes extends SpatieData
{
    public function __construct(
        public WebhookEventType|Optional $eventType = new Optional,
        public string|Optional $payload = new Optional,
        public bool|Optional $ping = new Optional,
        public string|Optional $createdDate = new Optional,
    ) {}
}
