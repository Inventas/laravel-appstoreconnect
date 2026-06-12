<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetUploadFileUpdateRequest
 */
class BackgroundAssetUploadFileUpdateRequest extends SpatieData
{
    public function __construct(
        public BackgroundAssetUploadFileUpdateRequestData $data,
    ) {}
}
