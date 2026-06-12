<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * UserVisibleAppsLinkagesRequest
 */
class UserVisibleAppsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, UserVisibleAppsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, UserVisibleAppsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
