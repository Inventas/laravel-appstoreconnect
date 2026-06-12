<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionAttributes
 */
class AppStoreVersionAttributes extends SpatieData
{
    public function __construct(
        public Platform|Optional $platform = new Optional,
        public string|Optional $versionString = new Optional,
        public AppStoreVersionState|Optional $appStoreState = new Optional,
        public AppVersionState|Optional $appVersionState = new Optional,
        public string|Optional $copyright = new Optional,
        public string|Optional $reviewType = new Optional,
        public string|Optional $releaseType = new Optional,
        public string|Optional $earliestReleaseDate = new Optional,
        public bool|Optional $usesIdfa = new Optional,
        public bool|Optional $downloadable = new Optional,
        public string|Optional $createdDate = new Optional,
    ) {}
}
