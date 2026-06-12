<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionRelationshipsAppCustomProductPage
 */
class AppCustomProductPageVersionRelationshipsAppCustomProductPage extends SpatieData
{
    public function __construct(
        public AppCustomProductPageVersionRelationshipsAppCustomProductPageData|Optional $data = new Optional,
    ) {}
}
