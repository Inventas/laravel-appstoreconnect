<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterMatchmakingRuleErrorsV1metricResponse
 */
class GameCenterMatchmakingRuleErrorsV1metricResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterMatchmakingRuleErrorsV1metricResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterMatchmakingRuleErrorsV1metricResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
