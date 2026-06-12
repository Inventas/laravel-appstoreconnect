<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionUpdateRequestDataAttributes
 */
class ReviewSubmissionUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public Platform|Optional $platform = new Optional,
        public bool|Optional|null $submitted = new Optional,
        public bool|Optional|null $canceled = new Optional,
    ) {}
}
