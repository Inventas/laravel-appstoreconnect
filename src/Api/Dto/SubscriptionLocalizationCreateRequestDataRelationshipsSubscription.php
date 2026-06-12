<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionLocalizationCreateRequestDataRelationshipsSubscription
 */
class SubscriptionLocalizationCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionLocalizationCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
