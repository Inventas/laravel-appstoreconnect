<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticSignature
 */
class DiagnosticSignature extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public DiagnosticSignatureAttributes|Optional $attributes = new Optional,
        public DiagnosticSignatureRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
