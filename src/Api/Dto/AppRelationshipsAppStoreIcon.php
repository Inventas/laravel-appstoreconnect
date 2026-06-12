<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationshipsAppStoreIcon
 */
class AppRelationshipsAppStoreIcon extends SpatieData
{
    public function __construct(
        public AppRelationshipsAppStoreIconData|Optional $data = new Optional,
    ) {}
}
