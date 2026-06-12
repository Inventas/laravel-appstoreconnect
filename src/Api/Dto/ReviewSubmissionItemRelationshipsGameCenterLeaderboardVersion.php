<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsGameCenterLeaderboardVersion
 */
class ReviewSubmissionItemRelationshipsGameCenterLeaderboardVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsGameCenterLeaderboardVersionData|Optional $data = new Optional,
    ) {}
}
