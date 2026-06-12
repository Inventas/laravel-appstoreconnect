<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionAttributes
 */
class ReviewSubmissionAttributes extends SpatieData
{
    public function __construct(
        public Platform|Optional $platform = new Optional,
        public string|Optional $submittedDate = new Optional,
        public string|Optional $state = new Optional,
    ) {}
}
