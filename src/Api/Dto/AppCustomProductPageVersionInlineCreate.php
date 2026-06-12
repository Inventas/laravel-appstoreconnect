<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionInlineCreate
 */
class AppCustomProductPageVersionInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public AppCustomProductPageVersionInlineCreateAttributes|Optional $attributes = new Optional,
        public AppCustomProductPageVersionInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
