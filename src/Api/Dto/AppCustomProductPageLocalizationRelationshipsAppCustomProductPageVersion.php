<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationRelationshipsAppCustomProductPageVersion
 */
class AppCustomProductPageLocalizationRelationshipsAppCustomProductPageVersion extends SpatieData
{
    public function __construct(
        public AppCustomProductPageLocalizationRelationshipsAppCustomProductPageVersionData|Optional $data = new Optional,
    ) {}
}
