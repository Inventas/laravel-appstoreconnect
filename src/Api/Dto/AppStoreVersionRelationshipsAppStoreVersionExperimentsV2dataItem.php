<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionRelationshipsAppStoreVersionExperimentsV2dataItem
 */
class AppStoreVersionRelationshipsAppStoreVersionExperimentsV2dataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
