<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationLocalizationCreateRequestDataRelationships
 */
class BetaAppClipInvocationLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationLocalizationCreateRequestDataRelationshipsBetaAppClipInvocation $betaAppClipInvocation,
    ) {}
}
