<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * Checksums
 */
class Checksums extends SpatieData
{
    public function __construct(
        public ChecksumsFile|Optional $file = new Optional,
        public ChecksumsComposite|Optional $composite = new Optional,
    ) {}
}
