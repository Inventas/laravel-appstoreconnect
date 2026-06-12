<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleSetRelationshipsMatchmakingQueues
 */
class GameCenterMatchmakingRuleSetRelationshipsMatchmakingQueues extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleSetRelationshipsMatchmakingQueuesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, GameCenterMatchmakingRuleSetRelationshipsMatchmakingQueuesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
