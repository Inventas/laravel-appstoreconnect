<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupAttributes
 */
class SubscriptionGroupAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $referenceName = new Optional,
    ) {}
}
