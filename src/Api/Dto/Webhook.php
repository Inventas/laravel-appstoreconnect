<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * Webhook
 */
class Webhook extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public WebhookAttributes|Optional $attributes = new Optional,
        public WebhookRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
