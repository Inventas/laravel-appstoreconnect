<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticInsightReferenceVersionsItem
 */
class DiagnosticInsightReferenceVersionsItem extends SpatieData
{
    public function __construct(
        public string|Optional $version = new Optional,
        public int|float|Optional $value = new Optional,
    ) {}
}
