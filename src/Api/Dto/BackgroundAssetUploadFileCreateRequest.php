<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetUploadFileCreateRequest
 */
class BackgroundAssetUploadFileCreateRequest extends SpatieData
{
    public function __construct(
        public BackgroundAssetUploadFileCreateRequestData $data,
    ) {}
}
