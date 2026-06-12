<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MerchantIdsResponse
 */
class MerchantIdsResponse extends SpatieData
{
    /**
     * @param  array<int, MerchantId>  $data
     * @param  array<int, Certificate>|Optional  $included
     */
    public function __construct(
        /** @var array<int, MerchantId> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Certificate>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
