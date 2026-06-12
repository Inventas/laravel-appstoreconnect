<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppWithoutIncludesResponse
 */
class AppWithoutIncludesResponse extends SpatieData
{
    public function __construct(
        public App $data,
        public DocumentLinks $links,
    ) {}
}
