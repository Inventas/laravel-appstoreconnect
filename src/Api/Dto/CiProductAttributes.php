<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProductAttributes
 */
class CiProductAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $createdDate = new Optional,
        public string|Optional $productType = new Optional,
    ) {}
}
