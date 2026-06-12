<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupBetaTestersLinkagesRequest
 */
class BetaGroupBetaTestersLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, BetaGroupBetaTestersLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaGroupBetaTestersLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
