<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionLocalizationCreateRequestDataRelationships
 */
class SubscriptionLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionLocalizationCreateRequestDataRelationshipsSubscription $subscription,
    ) {}
}
