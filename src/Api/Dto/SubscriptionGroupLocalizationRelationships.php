<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupLocalizationRelationships
 */
class SubscriptionGroupLocalizationRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionGroupLocalizationRelationshipsSubscriptionGroup|Optional $subscriptionGroup = new Optional,
    ) {}
}
