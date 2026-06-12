<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoLocalizationCreateRequestData
 */
class AppInfoLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppInfoLocalizationCreateRequestDataAttributes $attributes,
        public AppInfoLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
