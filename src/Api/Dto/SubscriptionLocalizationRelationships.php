<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionLocalizationRelationships
 */
class SubscriptionLocalizationRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionLocalizationRelationshipsSubscription|Optional $subscription = new Optional,
    ) {}
}
