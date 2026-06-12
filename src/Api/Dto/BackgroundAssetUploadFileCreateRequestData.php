<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetUploadFileCreateRequestData
 */
class BackgroundAssetUploadFileCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BackgroundAssetUploadFileCreateRequestDataAttributes $attributes,
        public BackgroundAssetUploadFileCreateRequestDataRelationships $relationships,
    ) {}
}
