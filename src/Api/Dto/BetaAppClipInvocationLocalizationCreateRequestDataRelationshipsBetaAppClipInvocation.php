<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationLocalizationCreateRequestDataRelationshipsBetaAppClipInvocation
 */
class BetaAppClipInvocationLocalizationCreateRequestDataRelationshipsBetaAppClipInvocation extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationLocalizationCreateRequestDataRelationshipsBetaAppClipInvocationData $data,
    ) {}
}
