<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricePointV3relationshipsEqualizations
 */
class AppPricePointV3relationshipsEqualizations extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
    ) {}
}
