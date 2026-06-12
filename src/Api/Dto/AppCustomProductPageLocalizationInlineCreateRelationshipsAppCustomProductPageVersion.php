<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationInlineCreateRelationshipsAppCustomProductPageVersion
 */
class AppCustomProductPageLocalizationInlineCreateRelationshipsAppCustomProductPageVersion extends SpatieData
{
    public function __construct(
        public AppCustomProductPageLocalizationInlineCreateRelationshipsAppCustomProductPageVersionData|Optional $data = new Optional,
    ) {}
}
