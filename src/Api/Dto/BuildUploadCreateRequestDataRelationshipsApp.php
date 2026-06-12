<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadCreateRequestDataRelationshipsApp
 */
class BuildUploadCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public BuildUploadCreateRequestDataRelationshipsAppData $data,
    ) {}
}
