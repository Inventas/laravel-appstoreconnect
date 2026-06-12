<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterEnabledVersionCompatibleVersionsLinkagesRequest
 */
class GameCenterEnabledVersionCompatibleVersionsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterEnabledVersionCompatibleVersionsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterEnabledVersionCompatibleVersionsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
