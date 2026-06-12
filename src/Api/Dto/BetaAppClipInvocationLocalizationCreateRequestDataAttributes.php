<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppClipInvocationLocalizationCreateRequestDataAttributes
 */
class BetaAppClipInvocationLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $title,
        public string $locale,
    ) {}
}
