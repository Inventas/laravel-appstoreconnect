<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * RoutingAppCoverageAttributes
 */
class RoutingAppCoverageAttributes extends SpatieData
{
    /**
     * @param  array<int, UploadOperation>|Optional  $uploadOperations
     */
    public function __construct(
        public int|Optional $fileSize = new Optional,
        public string|Optional $fileName = new Optional,
        public string|Optional $sourceFileChecksum = new Optional,
        /** @var array<int, UploadOperation>|Optional */
        public array|Optional $uploadOperations = new Optional,
        public AppMediaAssetState|Optional $assetDeliveryState = new Optional,
    ) {}
}
