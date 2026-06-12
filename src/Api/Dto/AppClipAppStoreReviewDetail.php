<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAppStoreReviewDetail
 */
class AppClipAppStoreReviewDetail extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppClipAppStoreReviewDetailAttributes|Optional $attributes = new Optional,
        public AppClipAppStoreReviewDetailRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
