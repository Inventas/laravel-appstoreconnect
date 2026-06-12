<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotRelationships
 */
class AppScreenshotRelationships extends SpatieData
{
    public function __construct(
        public AppScreenshotRelationshipsAppScreenshotSet|Optional $appScreenshotSet = new Optional,
    ) {}
}
