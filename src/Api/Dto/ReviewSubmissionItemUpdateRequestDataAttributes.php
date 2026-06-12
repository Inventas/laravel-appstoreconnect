<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItemUpdateRequestDataAttributes
 */
class ReviewSubmissionItemUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $resolved = new Optional,
        public bool|Optional|null $removed = new Optional,
    ) {}
}
