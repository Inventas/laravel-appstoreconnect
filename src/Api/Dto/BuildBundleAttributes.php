<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildBundleAttributes
 */
class BuildBundleAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $supportedArchitectures
     * @param  array<int, string>|Optional  $requiredCapabilities
     * @param  array<int, string>|Optional  $deviceProtocols
     * @param  array<int, string>|Optional  $locales
     * @param  array<string, array<string, string>>|Optional  $entitlements
     */
    public function __construct(
        public string|Optional $bundleId = new Optional,
        public BuildBundleType|Optional $bundleType = new Optional,
        public string|Optional $sdkBuild = new Optional,
        public string|Optional $platformBuild = new Optional,
        public string|Optional $fileName = new Optional,
        public bool|Optional $hasSirikit = new Optional,
        public bool|Optional $hasOnDemandResources = new Optional,
        public bool|Optional $hasPrerenderedIcon = new Optional,
        public bool|Optional $usesLocationServices = new Optional,
        public bool|Optional $isIosBuildMacAppStoreCompatible = new Optional,
        public bool|Optional $includesSymbols = new Optional,
        #[MapName('dSYMUrl')]
        public string|Optional $dSymurl = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $supportedArchitectures = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $requiredCapabilities = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $deviceProtocols = new Optional,
        /** @var array<int, string>|Optional */
        public array|Optional $locales = new Optional,
        /** @var array<string, array<string, string>>|Optional */
        public array|Optional $entitlements = new Optional,
        public int|Optional $baDownloadAllowance = new Optional,
        public int|Optional $baMaxInstallSize = new Optional,
        public string|Optional $minimumOsVersion = new Optional,
    ) {}
}
