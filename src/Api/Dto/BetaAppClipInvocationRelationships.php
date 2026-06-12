<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationRelationships
 */
class BetaAppClipInvocationRelationships extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationRelationshipsBetaAppClipInvocationLocalizations|Optional $betaAppClipInvocationLocalizations = new Optional,
    ) {}
}
