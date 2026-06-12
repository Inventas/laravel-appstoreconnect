<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVariantsResponse
 */
class AlternativeDistributionPackageVariantsResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageVariant>  $data
     */
    public function __construct(
        /** @var array<int, AlternativeDistributionPackageVariant> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
