<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewDetailAttributes
 */
class BetaAppReviewDetailAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $contactFirstName = new Optional,
        public string|Optional $contactLastName = new Optional,
        public string|Optional $contactPhone = new Optional,
        public string|Optional $contactEmail = new Optional,
        public string|Optional $demoAccountName = new Optional,
        public string|Optional $demoAccountPassword = new Optional,
        public bool|Optional $demoAccountRequired = new Optional,
        public string|Optional $notes = new Optional,
    ) {}
}
