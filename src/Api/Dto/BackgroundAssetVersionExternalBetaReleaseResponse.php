<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionExternalBetaReleaseResponse
 */
class BackgroundAssetVersionExternalBetaReleaseResponse extends SpatieData
{
    /**
     * @param  array<int, BackgroundAssetVersion>|Optional  $included
     */
    public function __construct(
        public BackgroundAssetVersionExternalBetaRelease $data,
        public DocumentLinks $links,
        /** @var array<int, BackgroundAssetVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
