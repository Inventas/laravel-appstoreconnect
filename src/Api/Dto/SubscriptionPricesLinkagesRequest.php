<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPricesLinkagesRequest
 */
class SubscriptionPricesLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPricesLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPricesLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
