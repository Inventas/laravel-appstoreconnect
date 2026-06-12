<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileAttributes
 */
class ProfileAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public BundleIdPlatform|Optional $platform = new Optional,
        public string|Optional $profileType = new Optional,
        public string|Optional $profileState = new Optional,
        public string|Optional $profileContent = new Optional,
        public string|Optional $uuid = new Optional,
        public string|Optional $createdDate = new Optional,
        public string|Optional $expirationDate = new Optional,
    ) {}
}
