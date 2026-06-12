<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookDeliveryCreateRequestDataRelationships
 */
class WebhookDeliveryCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public WebhookDeliveryCreateRequestDataRelationshipsTemplate $template,
    ) {}
}
