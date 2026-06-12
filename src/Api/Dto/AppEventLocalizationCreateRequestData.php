<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventLocalizationCreateRequestData
 */
class AppEventLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppEventLocalizationCreateRequestDataAttributes $attributes,
        public AppEventLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
