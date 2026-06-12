<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAdvancedExperienceCreateRequestData
 */
class AppClipAdvancedExperienceCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppClipAdvancedExperienceCreateRequestDataAttributes $attributes,
        public AppClipAdvancedExperienceCreateRequestDataRelationships $relationships,
    ) {}
}
