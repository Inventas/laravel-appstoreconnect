<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsGameCenterChallengeVersion
 */
class ReviewSubmissionItemRelationshipsGameCenterChallengeVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsGameCenterChallengeVersionData|Optional $data = new Optional,
    ) {}
}
