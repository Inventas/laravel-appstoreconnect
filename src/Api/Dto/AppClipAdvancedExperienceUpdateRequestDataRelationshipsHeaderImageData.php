<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceUpdateRequestDataRelationshipsHeaderImageData
 */
class AppClipAdvancedExperienceUpdateRequestDataRelationshipsHeaderImageData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
