<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoLocalizationsResponse
 */
class AppInfoLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, AppInfoLocalization>  $data
     * @param  array<int, AppInfo>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppInfoLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AppInfo>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
