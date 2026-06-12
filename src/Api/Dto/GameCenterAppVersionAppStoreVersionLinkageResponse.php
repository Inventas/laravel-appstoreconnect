<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAppVersionAppStoreVersionLinkageResponse
 */
class GameCenterAppVersionAppStoreVersionLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterAppVersionAppStoreVersionLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
