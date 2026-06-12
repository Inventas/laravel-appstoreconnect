<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticLogsProductDataItemDiagnosticLogsItemCallStackTreeItem
 */
class DiagnosticLogsProductDataItemDiagnosticLogsItemCallStackTreeItem extends SpatieData
{
    /**
     * @param  array<int, DiagnosticLogsProductDataItemDiagnosticLogsItemCallStackTreeItemCallStacksItem>|Optional  $callStacks
     */
    public function __construct(
        public bool|Optional $callStackPerThread = new Optional,
        /** @var array<int, DiagnosticLogsProductDataItemDiagnosticLogsItemCallStackTreeItemCallStacksItem>|Optional */
        public array|Optional $callStacks = new Optional,
    ) {}
}
