<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppLocalizationAppLinkageResponse
 */
class BetaAppLocalizationAppLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaAppLocalizationAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
