<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewAttributes
 */
class AppPreviewAttributes extends SpatieData
{
    /**
     * @param  array<int, UploadOperation>|Optional  $uploadOperations
     */
    public function __construct(
        public int|Optional $fileSize = new Optional,
        public string|Optional $fileName = new Optional,
        public string|Optional $sourceFileChecksum = new Optional,
        public string|Optional $previewFrameTimeCode = new Optional,
        public string|Optional $mimeType = new Optional,
        public string|Optional $videoUrl = new Optional,
        public PreviewFrameImage|Optional $previewFrameImage = new Optional,
        public ImageAsset|Optional $previewImage = new Optional,
        /** @var array<int, UploadOperation>|Optional */
        public array|Optional $uploadOperations = new Optional,
        public AppMediaAssetState|Optional $assetDeliveryState = new Optional,
        public AppMediaVideoState|Optional $videoDeliveryState = new Optional,
    ) {}
}
