<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersion
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
