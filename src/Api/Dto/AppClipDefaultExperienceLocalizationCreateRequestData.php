<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipDefaultExperienceLocalizationCreateRequestData
 */
class AppClipDefaultExperienceLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppClipDefaultExperienceLocalizationCreateRequestDataAttributes $attributes,
        public AppClipDefaultExperienceLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
