<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalization
 */
class AppStoreVersionLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionLocalizationAttributes|Optional $attributes = new Optional,
        public AppStoreVersionLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
