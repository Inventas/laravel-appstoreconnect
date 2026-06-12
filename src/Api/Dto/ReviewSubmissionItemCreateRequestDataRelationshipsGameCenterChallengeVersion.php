<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterChallengeVersion
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterChallengeVersion extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsGameCenterChallengeVersionData|Optional $data = new Optional,
    ) {}
}
