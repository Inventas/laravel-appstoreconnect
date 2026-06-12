<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperience
 */
class AppClipDefaultExperience extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipDefaultExperienceAttributes|Optional $attributes = new Optional,
        public AppClipDefaultExperienceRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
