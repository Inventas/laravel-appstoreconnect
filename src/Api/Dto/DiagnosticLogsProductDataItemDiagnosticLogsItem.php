<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticLogsProductDataItemDiagnosticLogsItem
 */
class DiagnosticLogsProductDataItemDiagnosticLogsItem extends SpatieData
{
    /**
     * @param  array<int, DiagnosticLogsProductDataItemDiagnosticLogsItemCallStackTreeItem>|Optional  $callStackTree
     */
    public function __construct(
        /** @var array<int, DiagnosticLogsProductDataItemDiagnosticLogsItemCallStackTreeItem>|Optional */
        public array|Optional $callStackTree = new Optional,
        public DiagnosticLogsProductDataItemDiagnosticLogsItemDiagnosticMetaData|Optional $diagnosticMetaData = new Optional,
    ) {}
}
