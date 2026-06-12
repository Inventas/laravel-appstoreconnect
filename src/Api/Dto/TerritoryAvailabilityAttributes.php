<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAvailabilityAttributes
 */
class TerritoryAvailabilityAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $contentStatuses
     */
    public function __construct(
        public bool|Optional $available = new Optional,
        public string|Optional $releaseDate = new Optional,
        public bool|Optional $preOrderEnabled = new Optional,
        public string|Optional $preOrderPublishDate = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $contentStatuses = new Optional,
    ) {}
}
