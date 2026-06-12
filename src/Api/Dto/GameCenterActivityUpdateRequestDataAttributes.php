<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityUpdateRequestDataAttributes
 */
class GameCenterActivityUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<string, string>|Optional  $properties
     */
    public function __construct(
        public string|Optional|null $referenceName = new Optional,
        public string|Optional|null $playStyle = new Optional,
        public int|Optional|null $minimumPlayersCount = new Optional,
        public int|Optional|null $maximumPlayersCount = new Optional,
        public bool|Optional|null $supportsPartyCode = new Optional,
        public bool|Optional|null $archived = new Optional,
        /** @var array<string, string>|Optional */
        public array|Optional $properties = new Optional,
    ) {}
}
