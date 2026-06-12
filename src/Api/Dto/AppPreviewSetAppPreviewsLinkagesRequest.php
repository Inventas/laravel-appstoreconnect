<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPreviewSetAppPreviewsLinkagesRequest
 */
class AppPreviewSetAppPreviewsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, AppPreviewSetAppPreviewsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPreviewSetAppPreviewsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
