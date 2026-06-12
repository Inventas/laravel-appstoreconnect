<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersionExperimentV2data
 */
class ReviewSubmissionItemCreateRequestDataRelationshipsAppStoreVersionExperimentV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
