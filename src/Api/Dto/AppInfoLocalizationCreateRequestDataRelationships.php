<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoLocalizationCreateRequestDataRelationships
 */
class AppInfoLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppInfoLocalizationCreateRequestDataRelationshipsAppInfo $appInfo,
    ) {}
}
