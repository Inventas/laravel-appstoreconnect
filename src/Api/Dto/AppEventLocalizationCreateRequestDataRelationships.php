<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventLocalizationCreateRequestDataRelationships
 */
class AppEventLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppEventLocalizationCreateRequestDataRelationshipsAppEvent $appEvent,
    ) {}
}
