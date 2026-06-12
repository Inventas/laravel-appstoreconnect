<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocation
 */
class BetaAppClipInvocation extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaAppClipInvocationAttributes|Optional $attributes = new Optional,
        public BetaAppClipInvocationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
