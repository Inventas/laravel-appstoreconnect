<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadFileAttributes
 */
class BuildUploadFileAttributes extends SpatieData
{
    /**
     * @param  array<int, DeliveryFileUploadOperation>|Optional  $uploadOperations
     */
    public function __construct(
        public AppMediaAssetState|Optional $assetDeliveryState = new Optional,
        public string|Optional $assetToken = new Optional,
        public string|Optional $assetType = new Optional,
        public string|Optional $fileName = new Optional,
        public int|Optional $fileSize = new Optional,
        public Checksums|Optional $sourceFileChecksums = new Optional,
        /** @var array<int, DeliveryFileUploadOperation>|Optional */
        public array|Optional $uploadOperations = new Optional,
        public string|Optional $uti = new Optional,
    ) {}
}
