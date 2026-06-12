<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookDeliveryCreateRequestDataRelationshipsTemplate
 */
class WebhookDeliveryCreateRequestDataRelationshipsTemplate extends SpatieData
{
    public function __construct(
        public WebhookDeliveryCreateRequestDataRelationshipsTemplateData $data,
    ) {}
}
