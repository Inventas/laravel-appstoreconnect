<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersionExperimentV2
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersionExperimentV2 extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersionExperimentV2data|Optional $data = new Optional,
    ) {}
}
