<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MerchantIdResponse
 */
class MerchantIdResponse extends SpatieData
{
    /**
     * @param  array<int, Certificate>|Optional  $included
     */
    public function __construct(
        public MerchantId $data,
        public DocumentLinks $links,
        /** @var array<int, Certificate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
