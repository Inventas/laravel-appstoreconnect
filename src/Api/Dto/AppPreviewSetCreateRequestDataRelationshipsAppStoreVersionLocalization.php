<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetCreateRequestDataRelationshipsAppStoreVersionLocalization
 */
class AppPreviewSetCreateRequestDataRelationshipsAppStoreVersionLocalization extends SpatieData
{
    public function __construct(
        public AppPreviewSetCreateRequestDataRelationshipsAppStoreVersionLocalizationData|Optional $data = new Optional,
    ) {}
}
