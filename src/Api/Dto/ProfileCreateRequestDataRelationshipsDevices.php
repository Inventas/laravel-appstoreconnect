<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileCreateRequestDataRelationshipsDevices
 */
class ProfileCreateRequestDataRelationshipsDevices extends SpatieData
{
    /**
     * @param  array<int, ProfileCreateRequestDataRelationshipsDevicesDataItem>|Optional  $data
     */
    public function __construct(
        /** @var array<int, ProfileCreateRequestDataRelationshipsDevicesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
