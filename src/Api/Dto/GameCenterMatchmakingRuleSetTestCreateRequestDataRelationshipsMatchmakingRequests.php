<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleSetTestCreateRequestDataRelationshipsMatchmakingRequests
 */
class GameCenterMatchmakingRuleSetTestCreateRequestDataRelationshipsMatchmakingRequests extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleSetTestCreateRequestDataRelationshipsMatchmakingRequestsDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingRuleSetTestCreateRequestDataRelationshipsMatchmakingRequestsDataItem> */
        public array $data,
    ) {}
}
