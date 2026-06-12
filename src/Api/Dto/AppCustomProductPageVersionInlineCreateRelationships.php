<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionInlineCreateRelationships
 */
class AppCustomProductPageVersionInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPage|Optional $appCustomProductPage = new Optional,
        public AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPageLocalizations|Optional $appCustomProductPageLocalizations = new Optional,
    ) {}
}
