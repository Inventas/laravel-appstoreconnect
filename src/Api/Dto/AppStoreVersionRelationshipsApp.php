<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionRelationshipsApp
 */
class AppStoreVersionRelationshipsApp extends SpatieData
{
    public function __construct(
        public AppStoreVersionRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
