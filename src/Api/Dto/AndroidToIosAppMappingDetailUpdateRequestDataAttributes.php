<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AndroidToIosAppMappingDetailUpdateRequestDataAttributes
 */
class AndroidToIosAppMappingDetailUpdateRequestDataAttributes extends SpatieData
{
    /**
     * @param  array<int, string>|Optional|null  $appSigningKeyPublicCertificateSha256fingerprints
     */
    public function __construct(
        public string|Optional|null $packageName = new Optional,
        /** @var array<int, string>|Optional|null */
        #[MapName('appSigningKeyPublicCertificateSha256Fingerprints')]
        public array|Optional|null $appSigningKeyPublicCertificateSha256fingerprints = new Optional,
    ) {}
}
