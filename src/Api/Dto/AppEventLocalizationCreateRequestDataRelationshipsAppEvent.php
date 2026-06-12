<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventLocalizationCreateRequestDataRelationshipsAppEvent
 */
class AppEventLocalizationCreateRequestDataRelationshipsAppEvent extends SpatieData
{
    public function __construct(
        public AppEventLocalizationCreateRequestDataRelationshipsAppEventData $data,
    ) {}
}
