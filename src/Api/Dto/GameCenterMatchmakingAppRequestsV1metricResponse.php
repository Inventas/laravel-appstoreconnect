<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingAppRequestsV1metricResponse
 */
class GameCenterMatchmakingAppRequestsV1metricResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingAppRequestsV1metricResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingAppRequestsV1metricResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
