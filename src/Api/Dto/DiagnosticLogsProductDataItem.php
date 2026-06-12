<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticLogsProductDataItem
 */
class DiagnosticLogsProductDataItem extends SpatieData
{
    /**
     * @param  array<int, DiagnosticLogsProductDataItemDiagnosticInsightsItem>|Optional  $diagnosticInsights
     * @param  array<int, DiagnosticLogsProductDataItemDiagnosticLogsItem>|Optional  $diagnosticLogs
     */
    public function __construct(
        public string|Optional $signatureId = new Optional,
        /** @var array<int, DiagnosticLogsProductDataItemDiagnosticInsightsItem>|Optional */
        public array|Optional $diagnosticInsights = new Optional,
        /** @var array<int, DiagnosticLogsProductDataItemDiagnosticLogsItem>|Optional */
        public array|Optional $diagnosticLogs = new Optional,
    ) {}
}
