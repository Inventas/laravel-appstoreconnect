<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetCreateRequestDataRelationshipsAppCustomProductPageLocalization
 */
class AppScreenshotSetCreateRequestDataRelationshipsAppCustomProductPageLocalization extends SpatieData
{
    public function __construct(
        public AppScreenshotSetCreateRequestDataRelationshipsAppCustomProductPageLocalizationData|Optional $data = new Optional,
    ) {}
}
