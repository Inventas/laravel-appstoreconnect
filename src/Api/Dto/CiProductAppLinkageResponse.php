<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CiProductAppLinkageResponse
 */
class CiProductAppLinkageResponse extends SpatieData
{
    public function __construct(
        public CiProductAppLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
