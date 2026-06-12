<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppLocalizationCreateRequestDataRelationshipsApp
 */
class BetaAppLocalizationCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public BetaAppLocalizationCreateRequestDataRelationshipsAppData $data,
    ) {}
}
