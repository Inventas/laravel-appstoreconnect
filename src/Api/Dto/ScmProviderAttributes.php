<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmProviderAttributes
 */
class ScmProviderAttributes extends SpatieData
{
    public function __construct(
        public ScmProviderType|Optional $scmProviderType = new Optional,
        public string|Optional $url = new Optional,
    ) {}
}
