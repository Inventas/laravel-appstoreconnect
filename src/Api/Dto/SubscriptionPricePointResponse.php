<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricePointResponse
 */
class SubscriptionPricePointResponse extends SpatieData
{
    /**
     * @param  array<int, Territory>|Optional  $included
     */
    public function __construct(
        public SubscriptionPricePoint $data,
        public DocumentLinks $links,
        /** @var array<int, Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
