<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupSubmissionCreateRequestData
 */
class SubscriptionGroupSubmissionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionGroupSubmissionCreateRequestDataRelationships $relationships,
    ) {}
}
