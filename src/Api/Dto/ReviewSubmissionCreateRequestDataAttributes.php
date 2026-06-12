<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionCreateRequestDataAttributes
 */
class ReviewSubmissionCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public Platform|Optional $platform = new Optional,
    ) {}
}
