<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalization
 */
class AppCustomProductPageLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppCustomProductPageLocalizationAttributes|Optional $attributes = new Optional,
        public AppCustomProductPageLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
