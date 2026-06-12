<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetRelationshipsRules
 */
class GameCenterMatchmakingRuleSetRelationshipsRules extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleSetRelationshipsRulesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterMatchmakingRuleSetRelationshipsRulesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
