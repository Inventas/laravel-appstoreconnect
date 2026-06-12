<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AgeRatingDeclarationResponse
 */
class AgeRatingDeclarationResponse extends SpatieData
{
    public function __construct(
        public AgeRatingDeclaration $data,
        public DocumentLinks $links,
    ) {}
}
