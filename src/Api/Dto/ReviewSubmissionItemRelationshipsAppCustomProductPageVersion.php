<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsAppCustomProductPageVersion
 */
class ReviewSubmissionItemRelationshipsAppCustomProductPageVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsAppCustomProductPageVersionData|Optional $data = new Optional,
    ) {}
}
