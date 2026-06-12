<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * RelationshipLinks
 */
class RelationshipLinks extends SpatieData
{
    public function __construct(
        public string|Optional $self = new Optional,
        public string|Optional $related = new Optional,
    ) {}
}
