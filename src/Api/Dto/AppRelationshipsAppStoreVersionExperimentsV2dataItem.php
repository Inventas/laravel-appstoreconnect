<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppRelationshipsAppStoreVersionExperimentsV2dataItem
 */
class AppRelationshipsAppStoreVersionExperimentsV2dataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
