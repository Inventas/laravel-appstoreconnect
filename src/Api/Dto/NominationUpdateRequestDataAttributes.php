<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationUpdateRequestDataAttributes
 */
class NominationUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, DeviceFamily>|Optional|null  $deviceFamilies
     * @param  array<int, string>|Optional|null  $locales
     * @param  array<int, string>|Optional|null  $supplementalMaterialsUris
     */
    public function __construct(
        public string|Optional|null $name = new Optional,
        public string|Optional|null $type = new Optional,
        public string|Optional|null $description = new Optional,
        public bool|Optional|null $submitted = new Optional,
        public bool|Optional|null $archived = new Optional,
        public string|Optional|null $publishStartDate = new Optional,
        public string|Optional|null $publishEndDate = new Optional,
        /** @var array<int, DeviceFamily>|Optional|null */
        public array|Optional|null $deviceFamilies = new Optional,
        /** @var array<int, string>|Optional|null */
        public array|Optional|null $locales = new Optional,
        /** @var array<int, string>|Optional|null */
        public array|Optional|null $supplementalMaterialsUris = new Optional,
        public bool|Optional|null $hasInAppEvents = new Optional,
        public bool|Optional|null $launchInSelectMarketsFirst = new Optional,
        public string|Optional|null $notes = new Optional,
        public bool|Optional|null $preOrderEnabled = new Optional,
    ) {}
}
