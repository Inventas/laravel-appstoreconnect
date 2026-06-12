<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticSignatureRelationships
 */
class DiagnosticSignatureRelationships extends SpatieData
{
    public function __construct(
        public DiagnosticSignatureRelationshipsLogs|Optional $logs = new Optional,
    ) {}
}
