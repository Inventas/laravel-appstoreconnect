<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationLocalizationInlineCreate
 */
class BetaAppClipInvocationLocalizationInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public BetaAppClipInvocationLocalizationInlineCreateAttributes $attributes,
        public string|Optional $id = new Optional,
        public BetaAppClipInvocationLocalizationInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
