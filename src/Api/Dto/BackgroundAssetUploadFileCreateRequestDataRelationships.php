<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetUploadFileCreateRequestDataRelationships
 */
class BackgroundAssetUploadFileCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BackgroundAssetUploadFileCreateRequestDataRelationshipsBackgroundAssetVersion $backgroundAssetVersion,
    ) {}
}
