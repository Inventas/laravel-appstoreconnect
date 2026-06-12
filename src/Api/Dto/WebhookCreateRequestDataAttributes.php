<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookCreateRequestDataAttributes
 */
class WebhookCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, WebhookEventType>  $eventTypes
     */
    public function __construct(
        public bool $enabled,
        /** @var array<int, WebhookEventType> */
        public array $eventTypes,
        public string $name,
        public string $secret,
        public string $url,
    ) {}
}
