<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterResponse
 */
class BetaTesterResponse extends SpatieData
{
    /**
     * @param  array<int, App|BetaGroup|Build>|Optional  $included
     */
    public function __construct(
        public BetaTester $data,
        public DocumentLinks $links,
        /** @var array<int, App|BetaGroup|Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
