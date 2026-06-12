<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiWorkflowsResponse
 */
class CiWorkflowsResponse extends SpatieData
{
    /**
     * @param  array<int, CiWorkflow>  $data
     * @param  array<int, CiMacOsVersion|CiProduct|CiXcodeVersion|ScmRepository>|Optional  $included
     */
    public function __construct(
        /** @var array<int, CiWorkflow> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, CiMacOsVersion|CiProduct|CiXcodeVersion|ScmRepository>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
