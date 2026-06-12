<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupCreateRequestDataAttributes
 */
class BetaGroupCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public bool|Optional|null $isInternalGroup = new Optional,
        public bool|Optional|null $hasAccessToAllBuilds = new Optional,
        public bool|Optional|null $publicLinkEnabled = new Optional,
        public bool|Optional|null $publicLinkLimitEnabled = new Optional,
        public int|Optional|null $publicLinkLimit = new Optional,
        public bool|Optional|null $feedbackEnabled = new Optional,
    ) {}
}
