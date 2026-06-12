<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionCreateRequestDataRelationshipsGroup
 */
class SubscriptionCreateRequestDataRelationshipsGroup extends SpatieData
{
    public function __construct(
        public SubscriptionCreateRequestDataRelationshipsGroupData $data,
    ) {}
}
