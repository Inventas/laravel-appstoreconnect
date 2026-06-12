<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipHeaderImageCreateRequestDataRelationships
 */
class AppClipHeaderImageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppClipHeaderImageCreateRequestDataRelationshipsAppClipDefaultExperienceLocalization $appClipDefaultExperienceLocalization,
    ) {}
}
