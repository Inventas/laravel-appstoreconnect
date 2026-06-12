<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProductWorkflowsLinkagesResponse
 */
class CiProductWorkflowsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiProductWorkflowsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiProductWorkflowsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
