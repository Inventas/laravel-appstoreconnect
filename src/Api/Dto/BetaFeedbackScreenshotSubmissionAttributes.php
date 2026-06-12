<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaFeedbackScreenshotSubmissionAttributes
 */
class BetaFeedbackScreenshotSubmissionAttributes extends SpatieData
{
    /**
     * @param  array<int, BetaFeedbackScreenshotImage>|Optional  $screenshots
     */
    public function __construct(
        public string|Optional $createdDate = new Optional,
        public string|Optional $comment = new Optional,
        public string|Optional $email = new Optional,
        public string|Optional $deviceModel = new Optional,
        public string|Optional $osVersion = new Optional,
        public string|Optional $locale = new Optional,
        public string|Optional $timeZone = new Optional,
        public string|Optional $architecture = new Optional,
        public DeviceConnectionType|Optional $connectionType = new Optional,
        public string|Optional $pairedAppleWatch = new Optional,
        public int|Optional $appUptimeInMilliseconds = new Optional,
        public int|Optional $diskBytesAvailable = new Optional,
        public int|Optional $diskBytesTotal = new Optional,
        public int|Optional $batteryPercentage = new Optional,
        public int|Optional $screenWidthInPoints = new Optional,
        public int|Optional $screenHeightInPoints = new Optional,
        public Platform|Optional $appPlatform = new Optional,
        public Platform|Optional $devicePlatform = new Optional,
        public DeviceFamily|Optional $deviceFamily = new Optional,
        public string|Optional $buildBundleId = new Optional,
        /** @var array<int, BetaFeedbackScreenshotImage>|Optional */
        public array|Optional $screenshots = new Optional,
    ) {}
}
