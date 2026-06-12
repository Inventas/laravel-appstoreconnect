<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AndroidToIosAppMappingDetailAttributes
 */
class AndroidToIosAppMappingDetailAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional  $appSigningKeyPublicCertificateSha256fingerprints
     */
    public function __construct(
        public string|Optional $packageName = new Optional,
        /** @var array<int, string>|Optional */
        #[MapName('appSigningKeyPublicCertificateSha256Fingerprints')]
        public array|Optional $appSigningKeyPublicCertificateSha256fingerprints = new Optional,
    ) {}
}
