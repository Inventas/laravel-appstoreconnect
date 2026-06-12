<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetRelationshipsTeams
 */
class GameCenterMatchmakingRuleSetRelationshipsTeams extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleSetRelationshipsTeamsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterMatchmakingRuleSetRelationshipsTeamsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
