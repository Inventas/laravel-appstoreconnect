<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookAttributes
 */
class WebhookAttributes extends SpatieData
{
    /**
     * @param  array<int, WebhookEventType>|Optional  $eventTypes
     */
    public function __construct(
        public bool|Optional $enabled = new Optional,
        /** @var array<int, WebhookEventType>|Optional */
        public array|Optional $eventTypes = new Optional,
        public string|Optional $name = new Optional,
        public string|Optional $url = new Optional,
    ) {}
}
