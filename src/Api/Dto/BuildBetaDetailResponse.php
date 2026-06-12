<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBetaDetailResponse
 */
class BuildBetaDetailResponse extends SpatieData
{
    /**
     * @param  array<int, Build>|Optional  $included
     */
    public function __construct(
        public BuildBetaDetail $data,
        public DocumentLinks $links,
        /** @var array<int, Build>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
