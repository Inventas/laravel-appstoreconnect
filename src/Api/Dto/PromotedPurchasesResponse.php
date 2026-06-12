<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchasesResponse
 */
class PromotedPurchasesResponse extends SpatieData
{
    /**
     * @param  array<int, PromotedPurchase>  $data
     * @param  array<int, InAppPurchaseV2|Subscription>|Optional  $included
     */
    public function __construct(
        /** @var array<int, PromotedPurchase> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, InAppPurchaseV2|Subscription>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
