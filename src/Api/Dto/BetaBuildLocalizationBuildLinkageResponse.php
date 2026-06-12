<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaBuildLocalizationBuildLinkageResponse
 */
class BetaBuildLocalizationBuildLinkageResponse extends SpatieData
{
    public function __construct(
        public BetaBuildLocalizationBuildLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
