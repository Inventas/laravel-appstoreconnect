<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterAchievementVersion
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterAchievementVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterAchievementVersionData|Optional $data = new Optional,
    ) {}
}
