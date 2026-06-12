<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterActivityVersion
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterActivityVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterActivityVersionData|Optional $data = new Optional,
    ) {}
}
