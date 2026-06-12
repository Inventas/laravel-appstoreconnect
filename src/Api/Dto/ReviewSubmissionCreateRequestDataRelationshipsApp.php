<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ReviewSubmissionCreateRequestDataRelationshipsApp
 */
class ReviewSubmissionCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public ReviewSubmissionCreateRequestDataRelationshipsAppData $data,
    ) {}
}
