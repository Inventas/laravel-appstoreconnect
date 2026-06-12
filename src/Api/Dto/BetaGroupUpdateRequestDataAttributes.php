<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupUpdateRequestDataAttributes
 */
class BetaGroupUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public bool|Optional|null $publicLinkEnabled = new Optional,
        public bool|Optional|null $publicLinkLimitEnabled = new Optional,
        public int|Optional|null $publicLinkLimit = new Optional,
        public bool|Optional|null $feedbackEnabled = new Optional,
        public bool|Optional|null $iosBuildsAvailableForAppleSiliconMac = new Optional,
        public bool|Optional|null $iosBuildsAvailableForAppleVision = new Optional,
    ) {}
}
