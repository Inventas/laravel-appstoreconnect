<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionItemRelationshipsGameCenterLeaderboardSetVersionData
 */
class ReviewSubmissionItemRelationshipsGameCenterLeaderboardSetVersionData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
