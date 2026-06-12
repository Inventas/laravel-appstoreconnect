<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricePointsV3Response
 */
class AppPricePointsV3response extends SpatieData
{
    /**
     * @param  array<int, AppPricePointV3>  $data
     * @param  array<int, App|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppPricePointV3> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
