<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperience
 */
class AppClipAdvancedExperience extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipAdvancedExperienceAttributes|Optional $attributes = new Optional,
        public AppClipAdvancedExperienceRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
