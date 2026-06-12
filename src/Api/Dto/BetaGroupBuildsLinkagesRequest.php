<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupBuildsLinkagesRequest
 */
class BetaGroupBuildsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, BetaGroupBuildsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaGroupBuildsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
