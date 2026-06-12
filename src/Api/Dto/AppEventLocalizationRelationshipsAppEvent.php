<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationRelationshipsAppEvent
 */
class AppEventLocalizationRelationshipsAppEvent extends SpatieData
{
    public function __construct(
        public AppEventLocalizationRelationshipsAppEventData|Optional $data = new Optional,
    ) {}
}
