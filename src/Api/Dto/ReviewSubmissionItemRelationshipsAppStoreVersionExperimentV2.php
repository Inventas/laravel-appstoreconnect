<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemRelationshipsAppStoreVersionExperimentV2
 */
class ReviewSubmissionItemRelationshipsAppStoreVersionExperimentV2 extends SpatieData
{
    public function __construct(
        public ReviewSubmissionItemRelationshipsAppStoreVersionExperimentV2data|Optional $data = new Optional,
    ) {}
}
