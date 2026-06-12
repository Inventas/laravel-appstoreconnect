<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoLocalizationCreateRequestDataRelationshipsAppInfo
 */
class AppInfoLocalizationCreateRequestDataRelationshipsAppInfo extends SpatieData
{
    public function __construct(
        public AppInfoLocalizationCreateRequestDataRelationshipsAppInfoData $data,
    ) {}
}
