<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventAttributes
 */
class AppEventAttributes extends SpatieData
{
    /**
     * @param  array<int, AppEventAttributesTerritorySchedulesItem>|Optional  $territorySchedules
     * @param  array<int, AppEventAttributesArchivedTerritorySchedulesItem>|Optional  $archivedTerritorySchedules
     */
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public string|Optional $badge = new Optional,
        public string|Optional $eventState = new Optional,
        public string|Optional $deepLink = new Optional,
        public string|Optional $purchaseRequirement = new Optional,
        public string|Optional $primaryLocale = new Optional,
        public string|Optional $priority = new Optional,
        public string|Optional $purpose = new Optional,
        /** @var array<int, AppEventAttributesTerritorySchedulesItem>|Optional */
        public array|Optional $territorySchedules = new Optional,
        /** @var array<int, AppEventAttributesArchivedTerritorySchedulesItem>|Optional */
        public array|Optional $archivedTerritorySchedules = new Optional,
    ) {}
}
