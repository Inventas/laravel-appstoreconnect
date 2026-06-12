<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationLocalizationCreateRequestData
 */
class BetaAppClipInvocationLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaAppClipInvocationLocalizationCreateRequestDataAttributes $attributes,
        public BetaAppClipInvocationLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
