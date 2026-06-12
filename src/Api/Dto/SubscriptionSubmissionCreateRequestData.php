<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionSubmissionCreateRequestData
 */
class SubscriptionSubmissionCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionSubmissionCreateRequestDataRelationships $relationships,
    ) {}
}
