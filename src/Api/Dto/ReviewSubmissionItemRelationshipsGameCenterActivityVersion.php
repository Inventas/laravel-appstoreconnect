<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsGameCenterActivityVersion
 */
class ReviewSubmissionItemRelationshipsGameCenterActivityVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsGameCenterActivityVersionData|Optional $data = new Optional,
    ) {}
}
