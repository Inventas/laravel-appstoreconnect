<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookDeliveryResponse
 */
class WebhookDeliveryResponse extends SpatieData
{
    /**
     * @param  array<int, WebhookEvent>|Optional  $included
     */
    public function __construct(
        public WebhookDelivery $data,
        public DocumentLinks $links,
        /** @var array<int, WebhookEvent>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
