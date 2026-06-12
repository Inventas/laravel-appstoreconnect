<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ActorAttributes
 */
class ActorAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $actorType = new Optional,
        public string|Optional $userFirstName = new Optional,
        public string|Optional $userLastName = new Optional,
        public string|Optional $userEmail = new Optional,
        public string|Optional $apiKeyId = new Optional,
    ) {}
}
