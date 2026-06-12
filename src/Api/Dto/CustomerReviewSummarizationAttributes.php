<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewSummarizationAttributes
 */
class CustomerReviewSummarizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $createdDate = new Optional,
        public string|Optional $locale = new Optional,
        public Platform|Optional $platform = new Optional,
        public string|Optional $text = new Optional,
    ) {}
}
