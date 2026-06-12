<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceUpdateRequestData
 */
class AppClipAdvancedExperienceUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipAdvancedExperienceUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public AppClipAdvancedExperienceUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
