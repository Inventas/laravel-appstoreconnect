<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventRelationships
 */
class AppEventRelationships extends SpatieData
{
    public function __construct(
        public AppEventRelationshipsLocalizations|Optional $localizations = new Optional,
    ) {}
}
