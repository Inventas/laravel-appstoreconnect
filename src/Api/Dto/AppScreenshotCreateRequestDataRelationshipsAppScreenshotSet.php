<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppScreenshotCreateRequestDataRelationshipsAppScreenshotSet
 */
class AppScreenshotCreateRequestDataRelationshipsAppScreenshotSet extends SpatieData
{
    public function __construct(
        public AppScreenshotCreateRequestDataRelationshipsAppScreenshotSetData $data,
    ) {}
}
