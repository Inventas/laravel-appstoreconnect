<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferCreateRequest
 */
class WinBackOfferCreateRequest extends SpatieData
{
    /**
     * @param  array<int, WinBackOfferPriceInlineCreate>|Optional  $included
     */
    public function __construct(
        public WinBackOfferCreateRequestData $data,
        /** @var array<int, WinBackOfferPriceInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
