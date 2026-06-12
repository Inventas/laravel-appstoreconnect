<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MarketplaceWebhooksResponse
 */
class MarketplaceWebhooksResponse extends SpatieData
{
    /**
     * @param  array<int, MarketplaceWebhook>  $data
     */
    public function __construct(
        /** @var array<int, MarketplaceWebhook> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
