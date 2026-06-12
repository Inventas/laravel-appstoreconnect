<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AgeRatingDeclarationUpdateRequest
 */
class AgeRatingDeclarationUpdateRequest extends SpatieData
{
    public function __construct(
        public AgeRatingDeclarationUpdateRequestData $data,
    ) {}
}
