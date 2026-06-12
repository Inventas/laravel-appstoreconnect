<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildAttributes
 */
class BuildAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $version = new Optional,
        public string|Optional $uploadedDate = new Optional,
        public string|Optional $expirationDate = new Optional,
        public bool|Optional $expired = new Optional,
        public string|Optional $minOsVersion = new Optional,
        public string|Optional $lsMinimumSystemVersion = new Optional,
        public string|Optional $computedMinMacOsVersion = new Optional,
        public string|Optional $computedMinVisionOsVersion = new Optional,
        public ImageAsset|Optional $iconAssetToken = new Optional,
        public string|Optional $processingState = new Optional,
        public BuildAudienceType|Optional $buildAudienceType = new Optional,
        public bool|Optional $usesNonExemptEncryption = new Optional,
    ) {}
}
