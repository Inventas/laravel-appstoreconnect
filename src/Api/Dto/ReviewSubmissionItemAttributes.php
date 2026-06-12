<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemAttributes
 */
class ReviewSubmissionItemAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $state = new Optional,
    ) {}
}
