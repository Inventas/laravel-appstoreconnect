<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPage
 */
class AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPage extends SpatieData
{
    public function __construct(
        public AppCustomProductPageVersionInlineCreateRelationshipsAppCustomProductPageData|Optional $data = new Optional,
    ) {}
}
