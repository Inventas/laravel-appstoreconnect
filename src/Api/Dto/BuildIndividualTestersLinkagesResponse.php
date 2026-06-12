<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildIndividualTestersLinkagesResponse
 */
class BuildIndividualTestersLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, BuildIndividualTestersLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BuildIndividualTestersLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
