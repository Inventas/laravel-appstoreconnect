<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePricesResponse
 */
class InAppPurchasePricesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchasePrice>  $data
     * @param  array<int, InAppPurchasePricePoint|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, InAppPurchasePrice> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, InAppPurchasePricePoint|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
