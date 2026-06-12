<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppBetaTestersLinkagesRequest
 */
class AppBetaTestersLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, AppBetaTestersLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppBetaTestersLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
