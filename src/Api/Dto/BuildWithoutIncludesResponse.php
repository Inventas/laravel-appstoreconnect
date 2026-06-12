<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildWithoutIncludesResponse
 */
class BuildWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public Build $data,
        public DocumentLinks $links,
    ) {}
}
