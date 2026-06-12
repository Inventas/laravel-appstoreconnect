<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppStoreReviewDetailCreateRequestData
 */
class AppClipAppStoreReviewDetailCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppClipAppStoreReviewDetailCreateRequestDataRelationships $relationships,
        public AppClipAppStoreReviewDetailCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
