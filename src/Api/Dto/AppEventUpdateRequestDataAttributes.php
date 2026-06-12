<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventUpdateRequestDataAttributes
 */
class AppEventUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, AppEventUpdateRequestDataAttributesTerritorySchedulesItem>|Optional|null  $territorySchedules
     */
    public function __construct(
        public string|Optional|null $referenceName = new Optional,
        public string|Optional|null $badge = new Optional,
        public string|Optional|null $deepLink = new Optional,
        public string|Optional|null $purchaseRequirement = new Optional,
        public string|Optional|null $primaryLocale = new Optional,
        public string|Optional|null $priority = new Optional,
        public string|Optional|null $purpose = new Optional,
        /** @var array<int, AppEventUpdateRequestDataAttributesTerritorySchedulesItem>|Optional|null */
        public array|Optional|null $territorySchedules = new Optional,
    ) {}
}
