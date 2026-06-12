<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterLeaderboardVersion
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterLeaderboardVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterLeaderboardVersionData|Optional $data = new Optional,
    ) {}
}
