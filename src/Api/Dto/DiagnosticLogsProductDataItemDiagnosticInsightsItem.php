<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticLogsProductDataItemDiagnosticInsightsItem
 */
class DiagnosticLogsProductDataItemDiagnosticInsightsItem extends SpatieData
{
    public function __construct(
        #[MapName('insightsURL')]
        public string|Optional $insightsUrl = new Optional,
        public string|Optional $insightsCategory = new Optional,
        public string|Optional $insightsString = new Optional,
    ) {}
}
