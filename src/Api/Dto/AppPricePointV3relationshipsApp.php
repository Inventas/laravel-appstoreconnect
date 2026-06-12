<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricePointV3relationshipsApp
 */
class AppPricePointV3relationshipsApp extends SpatieData
{
    public function __construct(
        public AppPricePointV3relationshipsAppData|Optional $data = new Optional,
    ) {}
}
