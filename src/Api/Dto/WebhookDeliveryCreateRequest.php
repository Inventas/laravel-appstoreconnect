<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * WebhookDeliveryCreateRequest
 */
class WebhookDeliveryCreateRequest extends SpatieData
{
    public function __construct(
        public WebhookDeliveryCreateRequestData $data,
    ) {}
}
