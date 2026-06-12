<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookDeliveryAttributesResponse
 */
class WebhookDeliveryAttributesResponse extends SpatieData
{
    public function __construct(
        public int|Optional $httpStatusCode = new Optional,
        public string|Optional $body = new Optional,
    ) {}
}
