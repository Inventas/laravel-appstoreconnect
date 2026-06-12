<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetResponse
 */
class BackgroundAssetResponse extends SpatieData
{
    /**
     * @param  array<int, App|BackgroundAssetVersion>|Optional  $included
     */
    public function __construct(
        public BackgroundAsset $data,
        public DocumentLinks $links,
        /** @var array<int, App|BackgroundAssetVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
