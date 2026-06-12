<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionReleaseCreateRequestData
 */
class GameCenterActivityVersionReleaseCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterActivityVersionReleaseCreateRequestDataRelationships $relationships,
    ) {}
}
