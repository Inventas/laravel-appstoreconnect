<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetRelationshipsApp
 */
class BackgroundAssetRelationshipsApp extends SpatieData
{
    public function __construct(
        public BackgroundAssetRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
