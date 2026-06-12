<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferResponse
 */
class WinBackOfferResponse extends SpatieData
{
    /**
     * @param  array<int, WinBackOfferPrice>|Optional  $included
     */
    public function __construct(
        public WinBackOffer $data,
        public DocumentLinks $links,
        /** @var array<int, WinBackOfferPrice>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
