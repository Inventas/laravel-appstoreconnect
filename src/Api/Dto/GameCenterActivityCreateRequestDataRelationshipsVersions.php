<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityCreateRequestDataRelationshipsVersions
 */
class GameCenterActivityCreateRequestDataRelationshipsVersions extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityCreateRequestDataRelationshipsVersionsDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, GameCenterActivityCreateRequestDataRelationshipsVersionsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
