<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionCreateRequestDataRelationshipsActivityData
 */
class GameCenterActivityVersionCreateRequestDataRelationshipsActivityData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
