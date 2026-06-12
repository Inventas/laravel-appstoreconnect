<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseContentAttributes
 */
class InAppPurchaseContentAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $fileName = new Optional,
        public int|Optional $fileSize = new Optional,
        public string|Optional $url = new Optional,
        public string|Optional $lastModifiedDate = new Optional,
    ) {}
}
