<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetUploadFileUpdateRequestDataAttributes
 */
class BackgroundAssetUploadFileUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $sourceFileChecksum = new Optional,
        public Checksums|Optional $sourceFileChecksums = new Optional,
        public bool|Optional|null $uploaded = new Optional,
    ) {}
}
