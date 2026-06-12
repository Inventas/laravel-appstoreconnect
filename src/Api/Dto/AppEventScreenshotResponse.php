<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventScreenshotResponse
 */
class AppEventScreenshotResponse extends SpatieData
{
    /**
     * @param  array<int, AppEventLocalization>|Optional  $included
     */
    public function __construct(
        public AppEventScreenshot $data,
        public DocumentLinks $links,
        /** @var array<int, AppEventLocalization>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
