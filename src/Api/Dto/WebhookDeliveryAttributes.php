<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookDeliveryAttributes
 */
class WebhookDeliveryAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $createdDate = new Optional,
        public string|Optional $deliveryState = new Optional,
        public string|Optional $errorMessage = new Optional,
        public bool|Optional $redelivery = new Optional,
        public string|Optional $sentDate = new Optional,
        public WebhookDeliveryAttributesRequest|Optional $request = new Optional,
        public WebhookDeliveryAttributesResponse|Optional $response = new Optional,
    ) {}
}
