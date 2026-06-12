<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeLocalizationResponse
 */
class GameCenterChallengeLocalizationResponse extends SpatieData
{
    /**
     * @param  array<int, GameCenterChallengeImage|GameCenterChallengeVersion>|Optional  $included
     */
    public function __construct(
        public GameCenterChallengeLocalization $data,
        public DocumentLinks $links,
        /** @var array<int, GameCenterChallengeImage|GameCenterChallengeVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
