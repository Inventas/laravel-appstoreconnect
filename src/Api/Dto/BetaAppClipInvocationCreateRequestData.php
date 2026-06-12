<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationCreateRequestData
 */
class BetaAppClipInvocationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaAppClipInvocationCreateRequestDataAttributes $attributes,
        public BetaAppClipInvocationCreateRequestDataRelationships $relationships,
    ) {}
}
