<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiBuildActionTestResultsLinkagesResponse
 */
class CiBuildActionTestResultsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiBuildActionTestResultsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiBuildActionTestResultsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
