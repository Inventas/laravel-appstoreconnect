<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingNumberRuleResultsV1metricResponse
 */
class GameCenterMatchmakingNumberRuleResultsV1metricResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingNumberRuleResultsV1metricResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
