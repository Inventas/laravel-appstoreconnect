<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppGameCenterDetailLinkageResponse
 */
class AppGameCenterDetailLinkageResponse extends SpatieData
{
    public function __construct(
        public AppGameCenterDetailLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
