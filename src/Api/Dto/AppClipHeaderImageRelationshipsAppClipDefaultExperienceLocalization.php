<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipHeaderImageRelationshipsAppClipDefaultExperienceLocalization
 */
class AppClipHeaderImageRelationshipsAppClipDefaultExperienceLocalization extends SpatieData
{
    public function __construct(
        public AppClipHeaderImageRelationshipsAppClipDefaultExperienceLocalizationData|Optional $data = new Optional,
    ) {}
}
