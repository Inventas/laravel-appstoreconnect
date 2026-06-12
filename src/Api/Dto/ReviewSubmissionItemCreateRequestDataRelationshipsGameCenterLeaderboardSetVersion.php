<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterLeaderboardSetVersion
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterLeaderboardSetVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterLeaderboardSetVersionData|Optional $data = new Optional,
    ) {}
}
