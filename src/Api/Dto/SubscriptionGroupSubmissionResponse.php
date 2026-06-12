<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupSubmissionResponse
 */
class SubscriptionGroupSubmissionResponse extends SpatieData
{
    public function __construct(
        public SubscriptionGroupSubmission $data,
        public DocumentLinks $links,
    ) {}
}
