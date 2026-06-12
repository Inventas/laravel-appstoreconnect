<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventVideoClipRelationships
 */
class AppEventVideoClipRelationships extends SpatieData
{
    public function __construct(
        public AppEventVideoClipRelationshipsAppEventLocalization|Optional $appEventLocalization = new Optional,
    ) {}
}
