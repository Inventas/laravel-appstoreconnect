<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationInlineCreateRelationships
 */
class AppCustomProductPageLocalizationInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public AppCustomProductPageLocalizationInlineCreateRelationshipsAppCustomProductPageVersion|Optional $appCustomProductPageVersion = new Optional,
    ) {}
}
