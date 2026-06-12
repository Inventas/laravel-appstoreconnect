<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PrereleaseVersion
 */
class PrereleaseVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public PrereleaseVersionAttributes|Optional $attributes = new Optional,
        public PrereleaseVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
