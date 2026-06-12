<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetCreateRequestDataRelationshipsAppCustomProductPageLocalization
 */
class AppPreviewSetCreateRequestDataRelationshipsAppCustomProductPageLocalization extends SpatieData
{
    public function __construct(
        public AppPreviewSetCreateRequestDataRelationshipsAppCustomProductPageLocalizationData|Optional $data = new Optional,
    ) {}
}
