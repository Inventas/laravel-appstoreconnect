<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaTesterAppsLinkagesRequest
 */
class BetaTesterAppsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, BetaTesterAppsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaTesterAppsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
