<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionAttributes
 */
class BackgroundAssetVersionAttributes extends SpatieData
{
    /**
     * @param  array<int, Platform>|Optional  $platforms
     */
    public function __construct(
        public string|Optional $createdDate = new Optional,
        /** @var array<int, Platform>|Optional */
        public array|Optional $platforms = new Optional,
        public BackgroundAssetVersionState|Optional $state = new Optional,
        public BackgroundAssetVersionAttributesStateDetails|Optional $stateDetails = new Optional,
        public string|Optional $version = new Optional,
        public string|Optional $locale = new Optional,
    ) {}
}
