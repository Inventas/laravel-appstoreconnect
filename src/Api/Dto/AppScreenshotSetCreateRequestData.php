<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetCreateRequestData
 */
class AppScreenshotSetCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppScreenshotSetCreateRequestDataAttributes $attributes,
        public AppScreenshotSetCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
