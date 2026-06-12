<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProductResponse
 */
class CiProductResponse extends SpatieData
{
    /**
     * @param  array<int, App|BundleId|ScmRepository>|Optional  $included
     */
    public function __construct(
        public CiProduct $data,
        public DocumentLinks $links,
        /** @var array<int, App|BundleId|ScmRepository>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
