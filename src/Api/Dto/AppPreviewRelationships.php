<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewRelationships
 */
class AppPreviewRelationships extends SpatieData
{
    public function __construct(
        public AppPreviewRelationshipsAppPreviewSet|Optional $appPreviewSet = new Optional,
    ) {}
}
