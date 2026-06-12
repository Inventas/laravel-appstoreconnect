<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationLocalizationInlineCreateRelationships
 */
class BetaAppClipInvocationLocalizationInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationLocalizationInlineCreateRelationshipsBetaAppClipInvocation|Optional $betaAppClipInvocation = new Optional,
    ) {}
}
