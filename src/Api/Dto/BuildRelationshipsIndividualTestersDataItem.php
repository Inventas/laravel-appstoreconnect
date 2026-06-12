<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildRelationshipsIndividualTestersDataItem
 */
class BuildRelationshipsIndividualTestersDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
