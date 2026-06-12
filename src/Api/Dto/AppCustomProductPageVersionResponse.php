<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionResponse
 */
class AppCustomProductPageVersionResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalization|AppCustomProductPage>|Optional  $included
     */
    public function __construct(
        public AppCustomProductPageVersion $data,
        public DocumentLinks $links,
        /** @var array<int, AppCustomProductPageLocalization|AppCustomProductPage>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
