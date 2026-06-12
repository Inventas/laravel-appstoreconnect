<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookEvent
 */
class WebhookEvent extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public WebhookEventAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
