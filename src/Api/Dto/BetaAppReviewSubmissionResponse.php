<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewSubmissionResponse
 */
class BetaAppReviewSubmissionResponse extends SpatieData
{
    /**
     * @param  array<int, Build>|Optional  $included
     */
    public function __construct(
        public BetaAppReviewSubmission $data,
        public DocumentLinks $links,
        /** @var array<int, Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
