<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityVersionReleaseCreateRequestDataRelationshipsVersion
 */
class GameCenterActivityVersionReleaseCreateRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionReleaseCreateRequestDataRelationshipsVersionData $data,
    ) {}
}
