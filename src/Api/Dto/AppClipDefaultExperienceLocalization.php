<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceLocalization
 */
class AppClipDefaultExperienceLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipDefaultExperienceLocalizationAttributes|Optional $attributes = new Optional,
        public AppClipDefaultExperienceLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
