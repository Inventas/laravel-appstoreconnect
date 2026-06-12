<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * AndroidToIosAppMappingDetailCreateRequestDataAttributes
 */
class AndroidToIosAppMappingDetailCreateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, string>  $appSigningKeyPublicCertificateSha256fingerprints
     */
    public function __construct(
        public string $packageName,
        /** @var array<int, string> */
        #[MapName('appSigningKeyPublicCertificateSha256Fingerprints')]
        public array $appSigningKeyPublicCertificateSha256fingerprints,
    ) {}
}
