<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalization
 */
class AppEventLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEventLocalizationAttributes|Optional $attributes = new Optional,
        public AppEventLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
