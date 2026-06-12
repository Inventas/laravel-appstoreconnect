<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiXcodeVersion
 */
class CiXcodeVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CiXcodeVersionAttributes|Optional $attributes = new Optional,
        public CiXcodeVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
