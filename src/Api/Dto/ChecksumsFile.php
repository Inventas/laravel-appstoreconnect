<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ChecksumsFile
 */
class ChecksumsFile extends SpatieData
{
    public function __construct(
        public string|Optional $hash = new Optional,
        public ChecksumAlgorithm|Optional $algorithm = new Optional,
    ) {}
}
