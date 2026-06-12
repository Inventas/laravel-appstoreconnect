<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * NominationAttributes
 */
class NominationAttributes extends SpatieData
{
    /**
     * @param  array<int, DeviceFamily>|Optional  $deviceFamilies
     * @param  array<int, string>|Optional  $locales
     * @param  array<int, string>|Optional  $supplementalMaterialsUris
     */
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $type = new Optional,
        public string|Optional $description = new Optional,
        public string|Optional $createdDate = new Optional,
        public string|Optional $lastModifiedDate = new Optional,
        public string|Optional $submittedDate = new Optional,
        public string|Optional $state = new Optional,
        public string|Optional $publishStartDate = new Optional,
        public string|Optional $publishEndDate = new Optional,
        /** @var array<int, DeviceFamily>|Optional */
        public array|Optional $deviceFamilies = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $locales = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $supplementalMaterialsUris = new Optional,
        public bool|Optional $hasInAppEvents = new Optional,
        public bool|Optional $launchInSelectMarketsFirst = new Optional,
        public string|Optional $notes = new Optional,
        public bool|Optional $preOrderEnabled = new Optional,
    ) {}
}
