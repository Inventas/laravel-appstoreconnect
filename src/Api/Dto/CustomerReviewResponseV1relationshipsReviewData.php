<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerReviewResponseV1relationshipsReviewData
 */
class CustomerReviewResponseV1relationshipsReviewData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
