<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemUpdateRequestData
 */
class ReviewSubmissionItemUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ReviewSubmissionItemUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
