<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AndroidToIosAppMappingDetailsResponse
 */
class AndroidToIosAppMappingDetailsResponse extends SpatieData
{
    /**
     * @param  array<int, AndroidToIosAppMappingDetail>  $data
     */
    public function __construct(
        /** @var array<int, AndroidToIosAppMappingDetail> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
