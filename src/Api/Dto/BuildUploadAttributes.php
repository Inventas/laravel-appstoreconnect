<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadAttributes
 */
class BuildUploadAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $cfBundleShortVersionString = new Optional,
        public string|Optional $cfBundleVersion = new Optional,
        public string|Optional $createdDate = new Optional,
        public BuildUploadAttributesState|Optional $state = new Optional,
        public Platform|Optional $platform = new Optional,
        public string|Optional $uploadedDate = new Optional,
    ) {}
}
