<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageCreateRequestDataRelationshipsAppStoreVersionTemplate
 */
class AppCustomProductPageCreateRequestDataRelationshipsAppStoreVersionTemplate extends SpatieData
{
    public function __construct(
        public AppCustomProductPageCreateRequestDataRelationshipsAppStoreVersionTemplateData|Optional $data = new Optional,
    ) {}
}
