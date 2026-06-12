<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadFileUpdateRequestDataAttributes
 */
class BuildUploadFileUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public Checksums|Optional $sourceFileChecksums = new Optional,
        public bool|Optional|null $uploaded = new Optional,
    ) {}
}
