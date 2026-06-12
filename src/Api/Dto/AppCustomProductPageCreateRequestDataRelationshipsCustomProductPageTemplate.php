<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageCreateRequestDataRelationshipsCustomProductPageTemplate
 */
class AppCustomProductPageCreateRequestDataRelationshipsCustomProductPageTemplate extends SpatieData
{
    public function __construct(
        public AppCustomProductPageCreateRequestDataRelationshipsCustomProductPageTemplateData|Optional $data = new Optional,
    ) {}
}
