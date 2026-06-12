<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookUpdateRequestDataAttributes
 */
class WebhookUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, WebhookEventType>|Optional|null  $eventTypes
     */
    public function __construct(
        public bool|Optional|null $enabled = new Optional,
        /** @var array<int, WebhookEventType>|Optional|null */
        public array|Optional|null $eventTypes = new Optional,
        public string|Optional|null $name = new Optional,
        public string|Optional|null $secret = new Optional,
        public string|Optional|null $url = new Optional,
    ) {}
}
