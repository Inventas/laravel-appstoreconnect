<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingSessionsV1metricResponse
 */
class GameCenterMatchmakingSessionsV1metricResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingSessionsV1metricResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingSessionsV1metricResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
