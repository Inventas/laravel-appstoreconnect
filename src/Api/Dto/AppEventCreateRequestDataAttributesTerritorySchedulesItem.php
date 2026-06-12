<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventCreateRequestDataAttributesTerritorySchedulesItem
 */
class AppEventCreateRequestDataAttributesTerritorySchedulesItem extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $territories
     */
    public function __construct(
        /** @var array<int, string>|Optional */
        public array|Optional $territories = new Optional,
        public string|Optional $publishStart = new Optional,
        public string|Optional $eventStart = new Optional,
        public string|Optional $eventEnd = new Optional,
    ) {}
}
