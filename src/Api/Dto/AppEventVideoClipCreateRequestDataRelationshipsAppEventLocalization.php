<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventVideoClipCreateRequestDataRelationshipsAppEventLocalization
 */
class AppEventVideoClipCreateRequestDataRelationshipsAppEventLocalization extends SpatieData
{
    public function __construct(
        public AppEventVideoClipCreateRequestDataRelationshipsAppEventLocalizationData $data,
    ) {}
}
