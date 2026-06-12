<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupCreateRequestDataRelationships
 */
class SubscriptionGroupCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionGroupCreateRequestDataRelationshipsApp $app,
    ) {}
}
