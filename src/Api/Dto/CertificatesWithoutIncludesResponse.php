<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificatesWithoutIncludesResponse
 */
class CertificatesWithoutIncludesResponse extends SpatieData
{
    /**
     * @param  array<int, Certificate>  $data
     */
    public function __construct(
        /** @var array<int, Certificate> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
