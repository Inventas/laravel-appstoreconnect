<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaGroupCreateRequestDataRelationshipsApp
 */
class BetaGroupCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public BetaGroupCreateRequestDataRelationshipsAppData $data,
    ) {}
}
