<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoLocalizationRelationships
 */
class AppInfoLocalizationRelationships extends SpatieData
{
    public function __construct(
        public AppInfoLocalizationRelationshipsAppInfo|Optional $appInfo = new Optional,
    ) {}
}
