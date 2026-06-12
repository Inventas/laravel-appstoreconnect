<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiArtifactAttributes
 */
class CiArtifactAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $fileType = new Optional,
        public string|Optional $fileName = new Optional,
        public int|Optional $fileSize = new Optional,
        public string|Optional $downloadUrl = new Optional,
    ) {}
}
