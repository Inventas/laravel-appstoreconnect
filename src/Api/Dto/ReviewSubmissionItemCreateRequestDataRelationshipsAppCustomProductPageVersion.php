<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsAppCustomProductPageVersion
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsAppCustomProductPageVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppCustomProductPageVersionData|Optional $data = new Optional,
    ) {}
}
