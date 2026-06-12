<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * Certificate
 */
class Certificate extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CertificateAttributes|Optional $attributes = new Optional,
        public CertificateRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
