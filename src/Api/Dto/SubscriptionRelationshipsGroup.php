<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsGroup
 */
class SubscriptionRelationshipsGroup extends SpatieData
{
    public function __construct(
        public SubscriptionRelationshipsGroupData|Optional $data = new Optional,
    ) {}
}
