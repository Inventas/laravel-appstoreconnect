<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRulesResponse
 */
class GameCenterMatchmakingRulesResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRule>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingRule> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
