<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionLocalizationSearchKeywordsLinkagesRequest
 */
class AppStoreVersionLocalizationSearchKeywordsLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionLocalizationSearchKeywordsLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionLocalizationSearchKeywordsLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
