<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppInfoAgeRatingDeclarationLinkageResponse
 */
class AppInfoAgeRatingDeclarationLinkageResponse extends SpatieData
{
    public function __construct(
        public AppInfoAgeRatingDeclarationLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
