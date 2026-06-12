<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionSubmissionCreateRequest
 */
class SubscriptionSubmissionCreateRequest extends SpatieData
{
    public function __construct(
        public SubscriptionSubmissionCreateRequestData $data,
    ) {}
}
