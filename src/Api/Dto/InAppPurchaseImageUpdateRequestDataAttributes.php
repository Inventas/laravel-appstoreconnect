<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseImageUpdateRequestDataAttributes
 */
class InAppPurchaseImageUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $sourceFileChecksum = new Optional,
        public bool|Optional|null $uploaded = new Optional,
    ) {}
}
