<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityLocalizationResponse
 */
class GameCenterActivityLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterActivityImage|GameCenterActivityVersion>|Optional  $included
     */
    public function __construct(
        public GameCenterActivityLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterActivityImage|GameCenterActivityVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
