<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetailCreateRequestDataAttributes
 */
class AppStoreReviewDetailCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $contactFirstName = new Optional,
        public string|Optional|null $contactLastName = new Optional,
        public string|Optional|null $contactPhone = new Optional,
        public string|Optional|null $contactEmail = new Optional,
        public string|Optional|null $demoAccountName = new Optional,
        public string|Optional|null $demoAccountPassword = new Optional,
        public bool|Optional|null $demoAccountRequired = new Optional,
        public string|Optional|null $notes = new Optional,
    ) {}
}
