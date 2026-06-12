<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricePointV3Response
 */
class AppPricePointV3response extends SpatieData
{
    /**
     * @param  array<int, App|Territory>|Optional  $included
     */
    public function __construct(
        public AppPricePointV3 $data,
        public DocumentLinks $links,
        /** @var array<int, App|Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
