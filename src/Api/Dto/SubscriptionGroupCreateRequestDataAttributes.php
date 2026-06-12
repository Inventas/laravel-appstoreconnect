<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupCreateRequestDataAttributes
 */
class SubscriptionGroupCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $referenceName,
    ) {}
}
