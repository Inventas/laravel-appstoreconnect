<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppKeyword
 */
class AppKeyword extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
