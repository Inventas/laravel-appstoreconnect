<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticSignatureAttributes
 */
class DiagnosticSignatureAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $diagnosticType = new Optional,
        public string|Optional $signature = new Optional,
        public int|float|Optional $weight = new Optional,
        public DiagnosticInsight|Optional $insight = new Optional,
    ) {}
}
