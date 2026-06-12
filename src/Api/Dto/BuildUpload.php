<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUpload
 */
class BuildUpload extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BuildUploadAttributes|Optional $attributes = new Optional,
        public BuildUploadRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
