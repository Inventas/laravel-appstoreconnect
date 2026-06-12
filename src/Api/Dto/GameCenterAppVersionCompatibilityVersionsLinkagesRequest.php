<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAppVersionCompatibilityVersionsLinkagesRequest
 */
class GameCenterAppVersionCompatibilityVersionsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, GameCenterAppVersionCompatibilityVersionsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, GameCenterAppVersionCompatibilityVersionsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
