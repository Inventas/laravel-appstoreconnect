<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingQueueSizesV1metricResponse
 */
class GameCenterMatchmakingQueueSizesV1metricResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingQueueSizesV1metricResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingQueueSizesV1metricResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
