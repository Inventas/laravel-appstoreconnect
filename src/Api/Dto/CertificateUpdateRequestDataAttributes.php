<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CertificateUpdateRequestDataAttributes
 */
class CertificateUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $activated = new Optional,
    ) {}
}
