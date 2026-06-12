<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PrereleaseVersionRelationships
 */
class PrereleaseVersionRelationships extends SpatieData
{
    public function __construct(
        public PrereleaseVersionRelationshipsBuilds|Optional $builds = new Optional,
        public PrereleaseVersionRelationshipsApp|Optional $app = new Optional,
    ) {}
}
