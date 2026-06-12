<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupLocalizationRelationshipsSubscriptionGroup
 */
class SubscriptionGroupLocalizationRelationshipsSubscriptionGroup extends SpatieData
{
    public function __construct(
        public SubscriptionGroupLocalizationRelationshipsSubscriptionGroupData|Optional $data = new Optional,
    ) {}
}
