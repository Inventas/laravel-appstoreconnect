<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageLocalizationCreateRequestData
 */
class AppCustomProductPageLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppCustomProductPageLocalizationCreateRequestDataAttributes $attributes,
        public AppCustomProductPageLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
