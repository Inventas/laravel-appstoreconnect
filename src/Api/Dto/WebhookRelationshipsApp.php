<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookRelationshipsApp
 */
class WebhookRelationshipsApp extends SpatieData
{
    public function __construct(
        public WebhookRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
