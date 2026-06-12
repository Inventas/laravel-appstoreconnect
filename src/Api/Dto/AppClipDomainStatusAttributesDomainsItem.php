<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDomainStatusAttributesDomainsItem
 */
class AppClipDomainStatusAttributesDomainsItem extends SpatieData
{
    public function __construct(
        public string|Optional $domain = new Optional,
        public bool|Optional $isValid = new Optional,
        public string|Optional $lastUpdatedDate = new Optional,
        public string|Optional $errorCode = new Optional,
    ) {}
}
