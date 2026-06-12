<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildBetaGroupsLinkagesRequest
 */
class BuildBetaGroupsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, BuildBetaGroupsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildBetaGroupsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
