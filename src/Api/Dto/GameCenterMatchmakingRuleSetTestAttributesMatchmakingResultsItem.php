<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetTestAttributesMatchmakingResultsItem
 */
class GameCenterMatchmakingRuleSetTestAttributesMatchmakingResultsItem extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingTeamAssignment>|Optional  $teamAssignments
     */
    public function __construct(
        public string|Optional $requestName = new Optional,
        /** @var array<int, GameCenterMatchmakingTeamAssignment>|Optional */
        public array|Optional $teamAssignments = new Optional,
    ) {}
}
