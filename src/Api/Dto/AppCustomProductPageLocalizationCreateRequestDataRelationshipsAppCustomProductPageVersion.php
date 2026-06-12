<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageLocalizationCreateRequestDataRelationshipsAppCustomProductPageVersion
 */
class AppCustomProductPageLocalizationCreateRequestDataRelationshipsAppCustomProductPageVersion extends SpatieData
{
    public function __construct(
        public AppCustomProductPageLocalizationCreateRequestDataRelationshipsAppCustomProductPageVersionData $data,
    ) {}
}
