<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupLocalizationCreateRequestData
 */
class SubscriptionGroupLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionGroupLocalizationCreateRequestDataAttributes $attributes,
        public SubscriptionGroupLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
