<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetUploadFileResponse
 */
class BackgroundAssetUploadFileResponse extends SpatieData
{
    public function __construct(
        public BackgroundAssetUploadFile $data,
        public DocumentLinks $links,
    ) {}
}
