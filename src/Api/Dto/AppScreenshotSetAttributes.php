<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetAttributes
 */
class AppScreenshotSetAttributes extends SpatieData
{
    public function __construct(
        public ScreenshotDisplayType|Optional $screenshotDisplayType = new Optional,
    ) {}
}
