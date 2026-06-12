<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventVideoClipRelationshipsAppEventLocalization
 */
class AppEventVideoClipRelationshipsAppEventLocalization extends SpatieData
{
    public function __construct(
        public AppEventVideoClipRelationshipsAppEventLocalizationData|Optional $data = new Optional,
    ) {}
}
