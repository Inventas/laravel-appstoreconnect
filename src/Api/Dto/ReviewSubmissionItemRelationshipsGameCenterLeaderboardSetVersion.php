<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsGameCenterLeaderboardSetVersion
 */
class ReviewSubmissionItemRelationshipsGameCenterLeaderboardSetVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsGameCenterLeaderboardSetVersionData|Optional $data = new Optional,
    ) {}
}
