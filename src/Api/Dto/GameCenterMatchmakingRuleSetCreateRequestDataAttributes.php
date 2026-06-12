<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterMatchmakingRuleSetCreateRequestDataAttributes
 */
class GameCenterMatchmakingRuleSetCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $referenceName,
        public int $ruleLanguageVersion,
        public int $minPlayers,
        public int $maxPlayers,
    ) {}
}
