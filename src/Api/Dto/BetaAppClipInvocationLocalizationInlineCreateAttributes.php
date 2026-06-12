<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationLocalizationInlineCreateAttributes
 */
class BetaAppClipInvocationLocalizationInlineCreateAttributes extends SpatieData
{
    public function __construct(
        public string $title,
        public string $locale,
    ) {}
}
