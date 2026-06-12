<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewRelationshipsAppPreviewSet
 */
class AppPreviewRelationshipsAppPreviewSet extends SpatieData
{
    public function __construct(
        public AppPreviewRelationshipsAppPreviewSetData|Optional $data = new Optional,
    ) {}
}
