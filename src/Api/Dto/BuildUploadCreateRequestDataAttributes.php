<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadCreateRequestDataAttributes
 */
class BuildUploadCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $cfBundleShortVersionString,
        public string $cfBundleVersion,
        public Platform $platform,
    ) {}
}
