<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfo
 */
class AppInfo extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppInfoAttributes|Optional $attributes = new Optional,
        public AppInfoRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
