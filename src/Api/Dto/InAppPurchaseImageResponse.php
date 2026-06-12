<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseImageResponse
 */
class InAppPurchaseImageResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2>|Optional  $included
     */
    public function __construct(
        public InAppPurchaseImage $data,
        public DocumentLinks $links,
        /** @var array<int, InAppPurchaseV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
