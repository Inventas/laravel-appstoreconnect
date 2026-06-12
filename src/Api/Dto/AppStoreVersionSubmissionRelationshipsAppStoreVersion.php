<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionSubmissionRelationshipsAppStoreVersion
 */
class AppStoreVersionSubmissionRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreVersionSubmissionRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
