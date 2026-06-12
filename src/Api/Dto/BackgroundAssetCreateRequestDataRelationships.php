<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetCreateRequestDataRelationships
 */
class BackgroundAssetCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BackgroundAssetCreateRequestDataRelationshipsApp $app,
    ) {}
}
