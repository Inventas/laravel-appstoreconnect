<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionDomainsResponse
 */
class AlternativeDistributionDomainsResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionDomain>  $data
     */
    public function __construct(
        /** @var array<int, AlternativeDistributionDomain> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
