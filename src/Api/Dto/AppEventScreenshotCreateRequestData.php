<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventScreenshotCreateRequestData
 */
class AppEventScreenshotCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppEventScreenshotCreateRequestDataAttributes $attributes,
        public AppEventScreenshotCreateRequestDataRelationships $relationships,
    ) {}
}
