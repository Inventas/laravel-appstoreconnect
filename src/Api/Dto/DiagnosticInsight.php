<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * DiagnosticInsight
 */
class DiagnosticInsight extends SpatieData
{
    /**
     * @param  array<int, DiagnosticInsightReferenceVersionsItem>|Optional  $referenceVersions
     */
    public function __construct(
        public DiagnosticInsightType|Optional $insightType = new Optional,
        public DiagnosticInsightDirection|Optional $direction = new Optional,
        /** @var array<int, DiagnosticInsightReferenceVersionsItem>|Optional */
        public array|Optional $referenceVersions = new Optional,
    ) {}
}
