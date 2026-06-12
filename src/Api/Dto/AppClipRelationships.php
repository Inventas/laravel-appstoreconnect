<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipRelationships
 */
class AppClipRelationships extends SpatieData
{
    public function __construct(
        public AppClipRelationshipsApp|Optional $app = new Optional,
        public AppClipRelationshipsAppClipDefaultExperiences|Optional $appClipDefaultExperiences = new Optional,
        public AppClipRelationshipsAppClipAdvancedExperiences|Optional $appClipAdvancedExperiences = new Optional,
    ) {}
}
