<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionItemRelationshipsAppStoreVersionExperimentV2data
 */
class ReviewSubmissionItemRelationshipsAppStoreVersionExperimentV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
