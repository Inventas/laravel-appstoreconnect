<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionCreateRequestDataRelationships
 */
class SubscriptionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionCreateRequestDataRelationshipsGroup $group,
    ) {}
}
