<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupUpdateRequestDataAttributes
 */
class SubscriptionGroupUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $referenceName = new Optional,
    ) {}
}
