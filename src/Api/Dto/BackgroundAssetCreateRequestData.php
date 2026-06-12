<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BackgroundAssetCreateRequestData
 */
class BackgroundAssetCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BackgroundAssetCreateRequestDataAttributes $attributes,
        public BackgroundAssetCreateRequestDataRelationships $relationships,
    ) {}
}
