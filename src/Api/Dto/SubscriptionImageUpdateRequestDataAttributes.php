<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionImageUpdateRequestDataAttributes
 */
class SubscriptionImageUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $sourceFileChecksum = new Optional,
        public bool|Optional|null $uploaded = new Optional,
    ) {}
}
