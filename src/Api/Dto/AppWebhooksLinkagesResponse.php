<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppWebhooksLinkagesResponse
 */
class AppWebhooksLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppWebhooksLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppWebhooksLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
