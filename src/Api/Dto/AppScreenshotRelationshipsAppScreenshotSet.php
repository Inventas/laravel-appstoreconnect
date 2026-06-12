<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotRelationshipsAppScreenshotSet
 */
class AppScreenshotRelationshipsAppScreenshotSet extends SpatieData
{
    public function __construct(
        public AppScreenshotRelationshipsAppScreenshotSetData|Optional $data = new Optional,
    ) {}
}
