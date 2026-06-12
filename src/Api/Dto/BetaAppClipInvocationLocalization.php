<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppClipInvocationLocalization
 */
class BetaAppClipInvocationLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaAppClipInvocationLocalizationAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
