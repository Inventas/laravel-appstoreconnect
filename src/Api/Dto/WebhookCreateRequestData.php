<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookCreateRequestData
 */
class WebhookCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public WebhookCreateRequestDataAttributes $attributes,
        public WebhookCreateRequestDataRelationships $relationships,
    ) {}
}
