<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageCreateRequest
 */
class AppCustomProductPageCreateRequest extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalizationInlineCreate|AppCustomProductPageVersionInlineCreate>|Optional  $included
     */
    public function __construct(
        public AppCustomProductPageCreateRequestData $data,
        /** @var array<int, AppCustomProductPageLocalizationInlineCreate|AppCustomProductPageVersionInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
