<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppTagRelationships
 */
class AppTagRelationships extends SpatieData
{
    public function __construct(
        public AppTagRelationshipsTerritories|Optional $territories = new Optional,
    ) {}
}
