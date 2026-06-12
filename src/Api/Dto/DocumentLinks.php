<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * DocumentLinks
 */
class DocumentLinks extends SpatieData
{
    public function __construct(
        public string $self,
    ) {}
}
