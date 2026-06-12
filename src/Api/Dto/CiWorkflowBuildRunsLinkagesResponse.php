<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowBuildRunsLinkagesResponse
 */
class CiWorkflowBuildRunsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, CiWorkflowBuildRunsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, CiWorkflowBuildRunsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
