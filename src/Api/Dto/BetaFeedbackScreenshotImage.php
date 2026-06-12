<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackScreenshotImage
 */
class BetaFeedbackScreenshotImage extends SpatieData
{
    public function __construct(
        public string|Optional $url = new Optional,
        public int|Optional $width = new Optional,
        public int|Optional $height = new Optional,
        public string|Optional $expirationDate = new Optional,
    ) {}
}
