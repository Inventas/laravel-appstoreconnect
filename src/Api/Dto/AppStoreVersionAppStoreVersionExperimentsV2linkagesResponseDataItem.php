<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionAppStoreVersionExperimentsV2linkagesResponseDataItem
 */
class AppStoreVersionAppStoreVersionExperimentsV2linkagesResponseDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
