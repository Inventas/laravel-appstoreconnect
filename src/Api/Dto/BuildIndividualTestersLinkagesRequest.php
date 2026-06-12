<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildIndividualTestersLinkagesRequest
 */
class BuildIndividualTestersLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, BuildIndividualTestersLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildIndividualTestersLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
