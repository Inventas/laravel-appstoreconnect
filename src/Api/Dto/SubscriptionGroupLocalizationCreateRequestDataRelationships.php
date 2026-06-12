<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupLocalizationCreateRequestDataRelationships
 */
class SubscriptionGroupLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionGroupLocalizationCreateRequestDataRelationshipsSubscriptionGroup $subscriptionGroup,
    ) {}
}
