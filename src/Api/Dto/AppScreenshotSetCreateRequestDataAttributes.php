<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppScreenshotSetCreateRequestDataAttributes
 */
class AppScreenshotSetCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public ScreenshotDisplayType $screenshotDisplayType,
    ) {}
}
