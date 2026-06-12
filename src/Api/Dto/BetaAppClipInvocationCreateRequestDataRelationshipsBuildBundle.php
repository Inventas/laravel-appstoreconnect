<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationCreateRequestDataRelationshipsBuildBundle
 */
class BetaAppClipInvocationCreateRequestDataRelationshipsBuildBundle extends SpatieData
{
    public function __construct(
        public BetaAppClipInvocationCreateRequestDataRelationshipsBuildBundleData $data,
    ) {}
}
