<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageLocalizationCreateRequestDataRelationships
 */
class AppCustomProductPageLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppCustomProductPageLocalizationCreateRequestDataRelationshipsAppCustomProductPageVersion $appCustomProductPageVersion,
    ) {}
}
