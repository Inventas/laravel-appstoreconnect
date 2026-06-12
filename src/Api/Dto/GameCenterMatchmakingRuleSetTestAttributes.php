<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetTestAttributes
 */
class GameCenterMatchmakingRuleSetTestAttributes extends SpatieData
{
    /**
     * @param  array<int, array<int, GameCenterMatchmakingRuleSetTestAttributesMatchmakingResultsItem>>|Optional  $matchmakingResults
     */
    public function __construct(
        /** @var array<int, array<int, GameCenterMatchmakingRuleSetTestAttributesMatchmakingResultsItem>>|Optional */
        public array|Optional $matchmakingResults = new Optional,
    ) {}
}
