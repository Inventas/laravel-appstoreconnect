<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ProfileRelationshipsDevices
 */
class ProfileRelationshipsDevices extends SpatieData
{
    /**
     * @param  array<int, ProfileRelationshipsDevicesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, ProfileRelationshipsDevicesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
