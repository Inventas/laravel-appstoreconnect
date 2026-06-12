<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaLicenseAgreementsResponse
 */
class BetaLicenseAgreementsResponse extends SpatieData
{
    /**
     * @param  array<int, BetaLicenseAgreement>  $data
     * @param  array<int, App>|Optional  $included
     */
    public function __construct(
        /** @var array<int, BetaLicenseAgreement> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, App>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
