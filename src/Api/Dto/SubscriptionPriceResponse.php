<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceResponse
 */
class SubscriptionPriceResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPricePoint|Territory>|Optional  $included
     */
    public function __construct(
        public SubscriptionPrice $data,
        public DocumentLinks $links,
        /** @var array<int, SubscriptionPricePoint|Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
