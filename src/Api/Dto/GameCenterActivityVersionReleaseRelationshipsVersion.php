<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionReleaseRelationshipsVersion
 */
class GameCenterActivityVersionReleaseRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionReleaseRelationshipsVersionData|Optional $data = new Optional,
    ) {}
}
