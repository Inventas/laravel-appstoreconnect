<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterActivityLocalizationImageLinkageResponse
 */
class GameCenterActivityLocalizationImageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterActivityLocalizationImageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
