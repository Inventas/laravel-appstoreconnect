<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityCreateRequestDataRelationshipsGameCenterDetailData
 */
class GameCenterActivityCreateRequestDataRelationshipsGameCenterDetailData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
