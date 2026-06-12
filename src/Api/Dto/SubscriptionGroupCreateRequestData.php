<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupCreateRequestData
 */
class SubscriptionGroupCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionGroupCreateRequestDataAttributes $attributes,
        public SubscriptionGroupCreateRequestDataRelationships $relationships,
    ) {}
}
