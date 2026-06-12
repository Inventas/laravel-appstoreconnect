<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingTeamsResponse
 */
class GameCenterMatchmakingTeamsResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingTeam>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingTeam> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
