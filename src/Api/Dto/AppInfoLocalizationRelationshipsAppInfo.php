<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoLocalizationRelationshipsAppInfo
 */
class AppInfoLocalizationRelationshipsAppInfo extends SpatieData
{
    public function __construct(
        public AppInfoLocalizationRelationshipsAppInfoData|Optional $data = new Optional,
    ) {}
}
