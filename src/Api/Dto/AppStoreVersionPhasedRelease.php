<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionPhasedRelease
 */
class AppStoreVersionPhasedRelease extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionPhasedReleaseAttributes|Optional $attributes = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
