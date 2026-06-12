<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionIntroductoryOffersLinkagesRequest
 */
class SubscriptionIntroductoryOffersLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, SubscriptionIntroductoryOffersLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionIntroductoryOffersLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
