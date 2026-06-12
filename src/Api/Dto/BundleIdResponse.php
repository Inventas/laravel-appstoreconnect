<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleIdResponse
 */
class BundleIdResponse extends SpatieData
{
    /**
     * @param  array<int, App|BundleIdCapability|Profile>|Optional  $included
     */
    public function __construct(
        public BundleId $data,
        public DocumentLinks $links,
        /** @var array<int, App|BundleIdCapability|Profile>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
