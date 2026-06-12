<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterAttributes
 */
class BetaTesterAttributes extends SpatieData
{
    /**
     * @param  array<int, BetaTesterAttributesAppDevicesItem>|Optional  $appDevices
     */
    public function __construct(
        public string|Optional $firstName = new Optional,
        public string|Optional $lastName = new Optional,
        public string|Optional $email = new Optional,
        public BetaInviteType|Optional $inviteType = new Optional,
        public BetaTesterState|Optional $state = new Optional,
        /** @var array<int, BetaTesterAttributesAppDevicesItem>|Optional */
        public array|Optional $appDevices = new Optional,
    ) {}
}
