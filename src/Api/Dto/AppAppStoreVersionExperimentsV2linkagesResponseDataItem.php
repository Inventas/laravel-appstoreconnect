<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAppStoreVersionExperimentsV2linkagesResponseDataItem
 */
class AppAppStoreVersionExperimentsV2linkagesResponseDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
