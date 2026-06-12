<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateResponse
 */
class CertificateResponse extends SpatieData
{
    /**
     * @param  array<int, PassTypeId>|Optional  $included
     */
    public function __construct(
        public Certificate $data,
        public DocumentLinks $links,
        /** @var array<int, PassTypeId>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
