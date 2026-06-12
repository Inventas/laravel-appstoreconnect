<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticLogs
 */
class DiagnosticLogs extends SpatieData
{
    /**
     * @param  array<int, DiagnosticLogsProductDataItem>|Optional  $productData
     */
    public function __construct(
        /** @var array<int, DiagnosticLogsProductDataItem>|Optional */
        public array|Optional $productData = new Optional,
        public string|Optional $version = new Optional,
    ) {}
}
