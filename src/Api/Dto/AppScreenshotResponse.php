<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotResponse
 */
class AppScreenshotResponse extends SpatieData
{
    /**
     * @param  array<int, AppScreenshotSet>|Optional  $included
     */
    public function __construct(
        public AppScreenshot $data,
        public DocumentLinks $links,
        /** @var array<int, AppScreenshotSet>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
