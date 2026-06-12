<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewCreateRequestDataRelationships
 */
class AppPreviewCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppPreviewCreateRequestDataRelationshipsAppPreviewSet $appPreviewSet,
    ) {}
}
