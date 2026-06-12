<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiTagPatternsPatternsItem
 */
class CiTagPatternsPatternsItem extends SpatieData
{
    public function __construct(
        public string|Optional $pattern = new Optional,
        public bool|Optional $isPrefix = new Optional,
    ) {}
}
