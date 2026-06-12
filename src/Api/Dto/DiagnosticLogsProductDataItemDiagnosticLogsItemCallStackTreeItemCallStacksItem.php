<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticLogsProductDataItemDiagnosticLogsItemCallStackTreeItemCallStacksItem
 */
class DiagnosticLogsProductDataItemDiagnosticLogsItemCallStackTreeItemCallStacksItem extends SpatieData
{
    /**
     * @param  array<int, DiagnosticLogCallStackNode>|Optional  $callStackRootFrames
     */
    public function __construct(
        /** @var array<int, DiagnosticLogCallStackNode>|Optional */
        public array|Optional $callStackRootFrames = new Optional,
    ) {}
}
