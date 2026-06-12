<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionCreateRequestDataAttributes
 */
class AppStoreVersionCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public Platform $platform,
        public string $versionString,
        public string|Optional|null $copyright = new Optional,
        public string|Optional|null $reviewType = new Optional,
        public string|Optional|null $releaseType = new Optional,
        public string|Optional|null $earliestReleaseDate = new Optional,
        public bool|Optional|null $usesIdfa = new Optional,
    ) {}
}
