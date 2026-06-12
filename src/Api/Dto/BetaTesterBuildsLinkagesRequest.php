<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaTesterBuildsLinkagesRequest
 */
class BetaTesterBuildsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, BetaTesterBuildsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaTesterBuildsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
