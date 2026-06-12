<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppScreenshotCreateRequestDataRelationships
 */
class AppScreenshotCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppScreenshotCreateRequestDataRelationshipsAppScreenshotSet $appScreenshotSet,
    ) {}
}
