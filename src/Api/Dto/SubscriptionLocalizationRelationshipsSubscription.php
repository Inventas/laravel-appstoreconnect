<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionLocalizationRelationshipsSubscription
 */
class SubscriptionLocalizationRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionLocalizationRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
