<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WebhookDeliveriesLinkagesResponse
 */
class WebhookDeliveriesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, WebhookDeliveriesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, WebhookDeliveriesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
