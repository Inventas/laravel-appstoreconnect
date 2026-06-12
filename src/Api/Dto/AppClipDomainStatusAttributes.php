<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipDomainStatusAttributes
 */
class AppClipDomainStatusAttributes extends SpatieData
{
    /**
     * @param  array<int, AppClipDomainStatusAttributesDomainsItem>|Optional  $domains
     */
    public function __construct(
        /** @var array<int, AppClipDomainStatusAttributesDomainsItem>|Optional */
        public array|Optional $domains = new Optional,
        public string|Optional $lastUpdatedDate = new Optional,
    ) {}
}
