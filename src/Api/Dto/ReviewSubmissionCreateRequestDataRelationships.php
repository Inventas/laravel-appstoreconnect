<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionCreateRequestDataRelationships
 */
class ReviewSubmissionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public ReviewSubmissionCreateRequestDataRelationshipsApp $app,
    ) {}
}
