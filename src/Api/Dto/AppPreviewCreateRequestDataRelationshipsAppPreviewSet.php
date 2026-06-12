<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewCreateRequestDataRelationshipsAppPreviewSet
 */
class AppPreviewCreateRequestDataRelationshipsAppPreviewSet extends SpatieData
{
    public function __construct(
        public AppPreviewCreateRequestDataRelationshipsAppPreviewSetData $data,
    ) {}
}
