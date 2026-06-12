<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookDeliveriesResponse
 */
class WebhookDeliveriesResponse extends SpatieData
{
    /**
     * @param  array<int, WebhookDelivery>  $data
     * @param  array<int, WebhookEvent>|Optional  $included
     */
    public function __construct(
        /** @var array<int, WebhookDelivery> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, WebhookEvent>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
