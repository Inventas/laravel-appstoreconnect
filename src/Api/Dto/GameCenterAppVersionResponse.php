<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAppVersionResponse
 */
class GameCenterAppVersionResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersion|GameCenterAppVersion>|Optional  $included
     */
    public function __construct(
        public GameCenterAppVersion $data,
        public DocumentLinks $links,
        /** @var array<int, AppStoreVersion|GameCenterAppVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
