<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceCreateRequestDataAttributesPlaceMainAddressStructuredAddress
 */
class AppClipAdvancedExperienceCreateRequestDataAttributesPlaceMainAddressStructuredAddress extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $streetAddress
     */
    public function __construct(
        /** @var array<int, string>|Optional */
        public array|Optional $streetAddress = new Optional,
        public string|Optional $floor = new Optional,
        public string|Optional $neighborhood = new Optional,
        public string|Optional $locality = new Optional,
        public string|Optional $stateProvince = new Optional,
        public string|Optional $postalCode = new Optional,
        public string|Optional $countryCode = new Optional,
    ) {}
}
