<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionCreateRequestData
 */
class SubscriptionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionCreateRequestDataAttributes $attributes,
        public SubscriptionCreateRequestDataRelationships $relationships,
    ) {}
}
