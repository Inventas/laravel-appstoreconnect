<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLocalizationImageLinkageResponse
 */
class GameCenterChallengeLocalizationImageLinkageResponse extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLocalizationImageLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
