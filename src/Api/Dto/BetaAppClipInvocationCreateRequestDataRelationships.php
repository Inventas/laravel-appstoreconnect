<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationCreateRequestDataRelationships
 */
class BetaAppClipInvocationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationCreateRequestDataRelationshipsBuildBundle $buildBundle,
        public BetaAppClipInvocationCreateRequestDataRelationshipsBetaAppClipInvocationLocalizations $betaAppClipInvocationLocalizations,
    ) {}
}
