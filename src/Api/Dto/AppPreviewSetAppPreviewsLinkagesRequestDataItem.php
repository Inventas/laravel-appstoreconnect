<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewSetAppPreviewsLinkagesRequestDataItem
 */
class AppPreviewSetAppPreviewsLinkagesRequestDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
