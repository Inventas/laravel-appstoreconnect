<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageAppCustomProductPageVersionsLinkagesResponseDataItem
 */
class AppCustomProductPageAppCustomProductPageVersionsLinkagesResponseDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
