<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupLocalizationCreateRequestDataRelationshipsSubscriptionGroup
 */
class SubscriptionGroupLocalizationCreateRequestDataRelationshipsSubscriptionGroup extends SpatieData
{
    public function __construct(
        public SubscriptionGroupLocalizationCreateRequestDataRelationshipsSubscriptionGroupData $data,
    ) {}
}
