<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoLocalization
 */
class AppInfoLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppInfoLocalizationAttributes|Optional $attributes = new Optional,
        public AppInfoLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
