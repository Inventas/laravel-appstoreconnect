<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTestRequestInlineCreateRelationshipsMatchmakingPlayerProperties
 */
class GameCenterMatchmakingTestRequestInlineCreateRelationshipsMatchmakingPlayerProperties extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingTestRequestInlineCreateRelationshipsMatchmakingPlayerPropertiesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingTestRequestInlineCreateRelationshipsMatchmakingPlayerPropertiesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
