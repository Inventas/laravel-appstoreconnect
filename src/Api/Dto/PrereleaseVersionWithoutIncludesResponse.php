<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PrereleaseVersionWithoutIncludesResponse
 */
class PrereleaseVersionWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public PrereleaseVersion $data,
        public DocumentLinks $links,
    ) {}
}
