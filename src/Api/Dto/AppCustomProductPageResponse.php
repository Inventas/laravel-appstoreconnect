<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageResponse
 */
class AppCustomProductPageResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalization|AppCustomProductPageVersion|App>|Optional  $included
     */
    public function __construct(
        public AppCustomProductPage $data,
        public DocumentLinks $links,
        /** @var array<int, AppCustomProductPageLocalization|AppCustomProductPageVersion|App>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
