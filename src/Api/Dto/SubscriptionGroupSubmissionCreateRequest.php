<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupSubmissionCreateRequest
 */
class SubscriptionGroupSubmissionCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionGroupSubmissionCreateRequestData $data,
    ) {}
}
