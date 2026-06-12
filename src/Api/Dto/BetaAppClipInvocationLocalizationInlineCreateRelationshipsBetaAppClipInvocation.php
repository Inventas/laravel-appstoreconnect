<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationLocalizationInlineCreateRelationshipsBetaAppClipInvocation
 */
class BetaAppClipInvocationLocalizationInlineCreateRelationshipsBetaAppClipInvocation extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationLocalizationInlineCreateRelationshipsBetaAppClipInvocationData|Optional $data = new Optional,
    ) {}
}
