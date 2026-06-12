<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityAttributes
 */
class GameCenterActivityAttributes extends SpatieData
{
    /**
     * @param  array<string, string>|Optional  $properties
     */
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public string|Optional $vendorIdentifier = new Optional,
        public string|Optional $playStyle = new Optional,
        public int|Optional $minimumPlayersCount = new Optional,
        public int|Optional $maximumPlayersCount = new Optional,
        public bool|Optional $supportsPartyCode = new Optional,
        public bool|Optional $archived = new Optional,
        /** @var array<string, string>|Optional */
        public array|Optional $properties = new Optional,
    ) {}
}
