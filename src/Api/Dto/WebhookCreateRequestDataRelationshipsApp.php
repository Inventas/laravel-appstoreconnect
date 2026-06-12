<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookCreateRequestDataRelationshipsApp
 */
class WebhookCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public WebhookCreateRequestDataRelationshipsAppData $data,
    ) {}
}
