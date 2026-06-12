<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewAttributes
 */
class CustomerReviewAttributes extends SpatieData
{
    public function __construct(
        public int|Optional $rating = new Optional,
        public string|Optional $title = new Optional,
        public string|Optional $body = new Optional,
        public string|Optional $reviewerNickname = new Optional,
        public string|Optional $createdDate = new Optional,
        public TerritoryCode|Optional $territory = new Optional,
    ) {}
}
