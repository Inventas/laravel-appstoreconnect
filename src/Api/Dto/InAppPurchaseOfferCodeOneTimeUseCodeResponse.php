<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeResponse
 */
class InAppPurchaseOfferCodeOneTimeUseCodeResponse extends SpatieData
{
    /**
     * @param  array<int, Actor>|Optional  $included
     */
    public function __construct(
        public InAppPurchaseOfferCodeOneTimeUseCode $data,
        public DocumentLinks $links,
        /** @var array<int, Actor>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
