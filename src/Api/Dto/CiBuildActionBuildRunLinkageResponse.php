<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiBuildActionBuildRunLinkageResponse
 */
class CiBuildActionBuildRunLinkageResponse extends SpatieData
{
    public function __construct(
        public CiBuildActionBuildRunLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
