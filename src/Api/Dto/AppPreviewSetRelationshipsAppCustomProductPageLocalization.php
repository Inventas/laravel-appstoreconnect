<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetRelationshipsAppCustomProductPageLocalization
 */
class AppPreviewSetRelationshipsAppCustomProductPageLocalization extends SpatieData
{
    public function __construct(
        public AppPreviewSetRelationshipsAppCustomProductPageLocalizationData|Optional $data = new Optional,
    ) {}
}
