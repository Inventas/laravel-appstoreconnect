<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionImageResponse
 */
class SubscriptionImageResponse extends SpatieData
{
    /**
     * @param  array<int, Subscription>|Optional  $included
     */
    public function __construct(
        public SubscriptionImage $data,
        public DocumentLinks $links,
        /** @var array<int, Subscription>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
