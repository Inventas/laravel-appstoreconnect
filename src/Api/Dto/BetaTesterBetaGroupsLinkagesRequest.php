<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaTesterBetaGroupsLinkagesRequest
 */
class BetaTesterBetaGroupsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, BetaTesterBetaGroupsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaTesterBetaGroupsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
