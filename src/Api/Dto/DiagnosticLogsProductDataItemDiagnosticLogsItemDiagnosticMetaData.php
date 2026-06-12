<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticLogsProductDataItemDiagnosticLogsItemDiagnosticMetaData
 */
class DiagnosticLogsProductDataItemDiagnosticLogsItemDiagnosticMetaData extends SpatieData
{
    public function __construct(
        public string|Optional $bundleId = new Optional,
        public string|Optional $event = new Optional,
        public string|Optional $osVersion = new Optional,
        public string|Optional $appVersion = new Optional,
        public string|Optional $writesCaused = new Optional,
        public string|Optional $deviceType = new Optional,
        public string|Optional $platformArchitecture = new Optional,
        public string|Optional $eventDetail = new Optional,
        public string|Optional $buildVersion = new Optional,
    ) {}
}
