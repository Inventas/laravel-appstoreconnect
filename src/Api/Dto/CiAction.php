<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiAction
 */
class CiAction extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public CiActionType|Optional $actionType = new Optional,
        public string|Optional $destination = new Optional,
        public BuildAudienceType|Optional $buildDistributionAudience = new Optional,
        public CiActionTestConfiguration|Optional $testConfiguration = new Optional,
        public string|Optional $scheme = new Optional,
        public string|Optional $platform = new Optional,
        public bool|Optional $isRequiredToPass = new Optional,
    ) {}
}
