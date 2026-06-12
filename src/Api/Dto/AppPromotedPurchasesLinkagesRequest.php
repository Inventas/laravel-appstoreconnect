<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPromotedPurchasesLinkagesRequest
 */
class AppPromotedPurchasesLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, AppPromotedPurchasesLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPromotedPurchasesLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
