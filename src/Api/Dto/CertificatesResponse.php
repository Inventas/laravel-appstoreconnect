<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificatesResponse
 */
class CertificatesResponse extends SpatieData
{
    /**
     * @param  array<int, Certificate>  $data
     * @param  array<int, PassTypeId>|Optional  $included
     */
    public function __construct(
        /** @var array<int, Certificate> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, PassTypeId>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
