<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceUpdateRequestData
 */
class AppClipDefaultExperienceUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipDefaultExperienceUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public AppClipDefaultExperienceUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
