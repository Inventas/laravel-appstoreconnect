<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInfoRelationshipsApp
 */
class AppInfoRelationshipsApp extends SpatieData
{
    public function __construct(
        public AppInfoRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
