<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * EndUserLicenseAgreementTerritoriesLinkagesResponse
 */
class EndUserLicenseAgreementTerritoriesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, EndUserLicenseAgreementTerritoriesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, EndUserLicenseAgreementTerritoriesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
