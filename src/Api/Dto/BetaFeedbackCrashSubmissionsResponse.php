<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackCrashSubmissionsResponse
 */
class BetaFeedbackCrashSubmissionsResponse extends SpatieData
{
    /**
     * @param  array<int, BetaFeedbackCrashSubmission>  $data
     * @param  array<int, BetaTester|Build>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BetaFeedbackCrashSubmission> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, BetaTester|Build>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
