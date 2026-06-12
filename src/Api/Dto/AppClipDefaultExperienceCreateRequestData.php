<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDefaultExperienceCreateRequestData
 */
class AppClipDefaultExperienceCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppClipDefaultExperienceCreateRequestDataRelationships $relationships,
        public AppClipDefaultExperienceCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
