<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionImageCreateRequestData
 */
class SubscriptionImageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionImageCreateRequestDataAttributes $attributes,
        public SubscriptionImageCreateRequestDataRelationships $relationships,
    ) {}
}
