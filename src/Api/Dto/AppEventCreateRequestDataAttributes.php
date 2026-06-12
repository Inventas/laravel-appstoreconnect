<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventCreateRequestDataAttributes
 */
class AppEventCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, AppEventCreateRequestDataAttributesTerritorySchedulesItem>|Optional|null  $territorySchedules
     */
    public function __construct(
        public string $referenceName,
        public string|Optional|null $badge = new Optional,
        public string|Optional|null $deepLink = new Optional,
        public string|Optional|null $purchaseRequirement = new Optional,
        public string|Optional|null $primaryLocale = new Optional,
        public string|Optional|null $priority = new Optional,
        public string|Optional|null $purpose = new Optional,
        /** @var array<int, AppEventCreateRequestDataAttributesTerritorySchedulesItem>|Optional|null */
        public array|Optional|null $territorySchedules = new Optional,
    ) {}
}
