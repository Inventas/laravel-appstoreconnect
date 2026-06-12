<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetUploadFileCreateRequestDataRelationshipsBackgroundAssetVersion
 */
class BackgroundAssetUploadFileCreateRequestDataRelationshipsBackgroundAssetVersion extends SpatieData
{
    public function __construct(
        public BackgroundAssetUploadFileCreateRequestDataRelationshipsBackgroundAssetVersionData $data,
    ) {}
}
