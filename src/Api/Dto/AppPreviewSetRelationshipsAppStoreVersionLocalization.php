<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetRelationshipsAppStoreVersionLocalization
 */
class AppPreviewSetRelationshipsAppStoreVersionLocalization extends SpatieData
{
    public function __construct(
        public AppPreviewSetRelationshipsAppStoreVersionLocalizationData|Optional $data = new Optional,
    ) {}
}
