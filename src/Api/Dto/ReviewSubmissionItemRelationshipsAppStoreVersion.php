<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsAppStoreVersion
 */
class ReviewSubmissionItemRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
