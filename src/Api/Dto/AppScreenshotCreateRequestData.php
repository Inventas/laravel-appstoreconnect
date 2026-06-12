<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppScreenshotCreateRequestData
 */
class AppScreenshotCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppScreenshotCreateRequestDataAttributes $attributes,
        public AppScreenshotCreateRequestDataRelationships $relationships,
    ) {}
}
