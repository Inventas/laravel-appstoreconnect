<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppClipAdvancedExperienceAttributesPlace
 */
class AppClipAdvancedExperienceAttributesPlace extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $names
     * @param  array<int, string>|Optional  $categories
     */
    public function __construct(
        public string|Optional $placeId = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $names = new Optional,
        public AppClipAdvancedExperienceAttributesPlaceMainAddress|Optional $mainAddress = new Optional,
        public AppClipAdvancedExperienceAttributesPlaceDisplayPoint|Optional $displayPoint = new Optional,
        public string|Optional $mapAction = new Optional,
        public string|Optional $relationship = new Optional,
        public AppClipAdvancedExperienceAttributesPlacePhoneNumber|Optional $phoneNumber = new Optional,
        public string|Optional $homePage = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $categories = new Optional,
    ) {}
}
