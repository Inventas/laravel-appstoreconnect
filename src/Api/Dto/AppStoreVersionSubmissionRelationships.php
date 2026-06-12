<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionSubmissionRelationships
 */
class AppStoreVersionSubmissionRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionSubmissionRelationshipsAppStoreVersion|Optional $appStoreVersion = new Optional,
    ) {}
}
