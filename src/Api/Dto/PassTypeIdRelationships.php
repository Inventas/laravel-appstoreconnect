<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PassTypeIdRelationships
 */
class PassTypeIdRelationships extends SpatieData
{
    public function __construct(
        public PassTypeIdRelationshipsCertificates|Optional $certificates = new Optional,
    ) {}
}
