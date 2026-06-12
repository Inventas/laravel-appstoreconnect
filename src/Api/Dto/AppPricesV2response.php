<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricesV2Response
 */
class AppPricesV2response extends SpatieData
{
    /**
     * @param  array<int, AppPriceV2>  $data
     * @param  array<int, AppPricePointV3|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppPriceV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppPricePointV3|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
