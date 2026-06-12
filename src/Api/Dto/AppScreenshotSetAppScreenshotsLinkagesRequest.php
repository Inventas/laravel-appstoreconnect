<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppScreenshotSetAppScreenshotsLinkagesRequest
 */
class AppScreenshotSetAppScreenshotsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, AppScreenshotSetAppScreenshotsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppScreenshotSetAppScreenshotsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
