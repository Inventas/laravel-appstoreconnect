<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaGroupAttributes
 */
class BetaGroupAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $createdDate = new Optional,
        public bool|Optional $isInternalGroup = new Optional,
        public bool|Optional $hasAccessToAllBuilds = new Optional,
        public bool|Optional $publicLinkEnabled = new Optional,
        public string|Optional $publicLinkId = new Optional,
        public bool|Optional $publicLinkLimitEnabled = new Optional,
        public int|Optional $publicLinkLimit = new Optional,
        public string|Optional $publicLink = new Optional,
        public bool|Optional $feedbackEnabled = new Optional,
        public bool|Optional $iosBuildsAvailableForAppleSiliconMac = new Optional,
        public bool|Optional $iosBuildsAvailableForAppleVision = new Optional,
    ) {}
}
