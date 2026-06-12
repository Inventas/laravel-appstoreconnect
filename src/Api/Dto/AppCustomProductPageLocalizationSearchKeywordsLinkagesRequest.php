<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppCustomProductPageLocalizationSearchKeywordsLinkagesRequest
 */
class AppCustomProductPageLocalizationSearchKeywordsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalizationSearchKeywordsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageLocalizationSearchKeywordsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
