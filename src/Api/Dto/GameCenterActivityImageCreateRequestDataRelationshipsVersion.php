<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityImageCreateRequestDataRelationshipsVersion
 */
class GameCenterActivityImageCreateRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterActivityImageCreateRequestDataRelationshipsVersionData|Optional $data = new Optional,
    ) {}
}
