<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionUpdateRequestDataRelationshipsAppClipDefaultExperienceData
 */
class AppStoreVersionUpdateRequestDataRelationshipsAppClipDefaultExperienceData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
