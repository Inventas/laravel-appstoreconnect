<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceCreateRequestDataRelationshipsReleaseWithAppStoreVersionData
 */
class AppClipDefaultExperienceCreateRequestDataRelationshipsReleaseWithAppStoreVersionData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
