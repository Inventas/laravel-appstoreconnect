<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBetaDetailAttributes
 */
class BuildBetaDetailAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $autoNotifyEnabled = new Optional,
        public InternalBetaState|Optional $internalBuildState = new Optional,
        public ExternalBetaState|Optional $externalBuildState = new Optional,
    ) {}
}
